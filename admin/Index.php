<?php
session_start();

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if(isset($_SESSION['user'])){
    include_once 'VerProductos.php';
    
} else if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    include_once "../conexion.php";

    $usuario = filtrado($_POST['usuario']);
    $contrasena = filtrado( sha1($_POST['contrasena']) );

    if ($query = "SELECT * FROM tbusuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'") {

        $consulta = $conexion->query($query);

        if($consulta->num_rows>0) {
            $fila = $consulta->fetch_assoc();

            $_SESSION['user'] = $fila['id'];
            include_once 'VerProductos.php';

        } else {
            echo "Datos incorrectos";
        }
    }

    
} else {
    include_once 'InicioSesion.php';
    
}

?>