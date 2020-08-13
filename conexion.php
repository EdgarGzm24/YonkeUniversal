<?php

    $servidor = "localhost";
    $usuario = "root";
  	$contrasena = "";
  	$dbnombre = "yonkedb";

	$conexion = new mysqli($servidor, $usuario, $contrasena, $dbnombre);
      if($conexion->connect_error){
        die("La conexión ha fallado, error número " . $db->connect_errno . ": " . $db->connect_error);
      }


?>