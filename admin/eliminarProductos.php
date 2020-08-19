<?php
    include_once '../conexion.php';
    $id = $_POST['id'];

    if(isset($id)){

        $stmt_select = $conexion->prepare("SELECT nombre FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.id = ?");
        $stmt_select->bind_Param('i', $id);
        $stmt_select->execute();
        
        $resultado = $stmt_select->get_result();
        while($imgRow = $resultado->fetch_assoc()) {

            unlink("../img/".$imgRow['nombre']);
        }
        $stmt_delete = $conexion->prepare("DELETE FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.id = ?");
        $stmt_delete->bind_Param('i', $id);
        $stmt_delete->execute();
        
        $stmt_select->close();
        $stmt_delete->close();
        $conexion->close();
    }

?>