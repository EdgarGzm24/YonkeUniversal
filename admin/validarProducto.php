<?php
    require_once("../conexion.php");

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

        if (!($stmt = $conexion->prepare("INSERT INTO tbautos(usuario, nombreauto, marca, modelo, anio, estado, cilindros, Motor, transmision) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))) {
             echo "Falló la preparación: (" . $conexion->errno . ") " . $conexion->error;
        }
        if (!$stmt->bind_param('isssssiss', $id_usuario, $nombreauto, $marca, $modelo, $anio, $estado, $cilindros, $Motor, $transmision)) {
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        }
        if (!$stmt->execute()) {
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
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
            //Comprobamos si el fichero es una imagen
            if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg') {
                
                $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
                $nuevo_nombre = "auto_".date("Ymd_his")."$f.".$extension;
                $nueva_direccion = "../img/".basename($nuevo_nombre);
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $nueva_direccion);
                
                if (!($stmt = $conexion->prepare("INSERT INTO imagenes (idAuto,nombre,numero) VALUES (?, ?, ?)"))){
                     echo "Falló la preparación: (" . $conexion->errno . ") " . $conexion->error;
                }
                if (!$stmt->bind_param('isi', $id_publicacion,$nuevo_nombre,$f)) {
                    echo "Falló la vinculación de parámetros: (" . $conexion->errno . ") " . $conexion->error;
                }
                if (!$stmt->execute()) {
                    echo "Falló la ejecución: (" .$conexion->errno . ") " . $conexion->error;
                }
            }
            $conexion->close();
        
    }

?>