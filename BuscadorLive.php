<?php
    require_once "conexion.php";

    $salida = "";

    $consulta = "SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto AND imagenes.numero=1 ORDER BY id DESC";

    if (isset($_POST['consulta'])) {
    	$buscador = $conexion->real_escape_string($_POST['consulta']);
        
    	$consulta = "SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.nombreauto LIKE '%$buscador%' AND imagenes.numero=1";
    }

    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows>0) {
        
    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td class='tbImg' width='30%'>
                            <a href='javascript:void(0)' onclick='mostrarDetalles(".$fila['id'].")'><img src='img/".$fila['nombre']."'></a>
                        </td>
    					
                        <td width='20%'>
                            <strong>".$fila['marca']."</strong><br><br>
                            <strong>Motor:</strong>".$fila['Motor']."<br>
                            <strong>Transmision:</strong> ".$fila['transmision']."<br>
                            <strong>Cilindros:</strong> ".$fila['cilindros']."
                        </td>
                        
    					<td width='20%'>
                            <strong>".$fila['modelo']."</strong>
                        </td>
    					
                        <td width='13%'>
                            <strong>".$fila['anio']."</strong>
                        </td>
    				</tr>";
    	}
    
    }
    else{
    	$salida.="<tr>
                    <td></td>
                    <td></td>
                    <td><strong>No se encontraron coincidencias</strong></td>
                    <td></td>
                    <td></td>
                </tr>";
    }


    echo $salida;

    $conexion->close();
?>


