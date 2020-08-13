<?php
include_once "../conexion.php";
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($query = "SELECT * FROM tbusuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'") {
    
    $consulta = $conexion->query($query);
    
    if($consulta->num_rows>0) {
        $fila = $consulta->fetch_assoc();
        
        $_SESSION['user'] = $fila['id'];
        header("location: VerProductos.php");
        
    } else {
        echo "Datos incorrectos";
    }
}

?>