<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location: ../Index.php");
    }
    require_once("../conexion.php");
    require_once("funciones.php");

    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if (isset($_POST['submit'])) {
        
        $id_usuario = filtrado($_POST['usuario']);
        $nombreauto = filtrado($_POST['nombreauto']);
        $marca = filtrado($_POST['marca']);
        $modelo = filtrado($_POST['modelo']);
        $anio = filtrado($_POST['anio']);
        $estado = filtrado($_POST['estado']);
        $cilindros = filtrado($_POST['cilindros']);
        $Motor = filtrado($_POST['Motor']);
        $transmision = filtrado($_POST['transmision']);

        if ($stmt = $conexion->prepare("INSERT INTO tbautos(usuario, nombreauto, marca, modelo, anio, estado, cilindros, Motor, transmision) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")){
            $stmt->bind_param('isssssiss', $id_usuario, $nombreauto, $marca, $modelo, $anio, $estado, $cilindros, $Motor, $transmision);
            $stmt->execute();
        }
            // Iniciamos sentencia preparada
        if ($stmt = $conexion->prepare("SELECT MAX(id) as id FROM tbautos")) {
            $stmt->execute();
            // Vinculamos variables a columnas
            $stmt->bind_result($id);
            // Obtenemos los valores
            $stmt->fetch();
            // Guardamos nuestro valor
            $id_publicacion = $id;
            // Cerramos la sentencia preparada
            $stmt->close();
        }

        $f=1;
        $cantidad = count($_FILES['image']['tmp_name']);
        for($i=0; $i < $cantidad; $i++){
                //Comprobamos si el fichero es una imagen
            if ($_FILES['image']['type'][$i]=='image/png' || $_FILES['image']['type'][$i]=='image/jpeg') {

                $extension = pathinfo($_FILES["image"]["name"][$i], PATHINFO_EXTENSION);
                $nuevo_nombre = "auto_".date("Ymd_his")."$f.".$extension;
                $nueva_direccion = "../img/".basename($nuevo_nombre);
                move_uploaded_file($_FILES["image"]["tmp_name"][$i], $nueva_direccion);
                
                $imagen_optimizada = redimensionar_imagen($nuevo_nombre,$nueva_direccion,700,700);
                imagejpeg($imagen_optimizada, $nueva_direccion);

                $stmt = $conexion->prepare("INSERT INTO imagenes (idAuto,nombre,numero) VALUES (?, ?, ?)");
                $stmt->bind_param('isi', $id_publicacion,$nuevo_nombre,$f);
                $stmt->execute();
            }
            $f++;
        }
        $conexion->close();
        
    }

?>