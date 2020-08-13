<?php
    require_once "../conexion.php";

    $salida = "";

    $consulta = "SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto AND imagenes.numero=1";

    if (isset($_POST['consulta'])) {
    	$buscador = $conexion->real_escape_string($_POST['consulta']);
        
    	$consulta = "SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.nombreauto LIKE '%$buscador%' AND imagenes.numero=1";
    }

    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows>0) {
        
    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
                        <td class='serial'>".$fila['id']."</td>
    					<td class='avatar'>
                            <div class='round-img'>
                                <a href='' ><img src='../img/".$fila['nombre']."' ></a>
                            </div>
                        </td>
    					
                        <td>Motor: ".$fila['Motor']."<br>Transmision: ".$fila['transmision']."<br>Cilindros: ".$fila['cilindros']."</td>
                        
                        <td>".$fila['marca']."</td>
                        
    					<td>".$fila['modelo']."</td>
    					
                        <td>".$fila['anio']."</td>
                        
                        <td><button type='button' class='btn btn-dark'><i class='fas fa-edit'></i></button>
                            <button type='button' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button></td>
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


