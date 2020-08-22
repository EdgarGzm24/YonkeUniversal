<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location: ../Index.php");
    }

    require_once "../conexion.php";

    $salida = "";

    $stmt = $conexion->prepare("SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto AND imagenes.numero=1");

    if (isset($_POST['consulta'])) {
    	$buscador = $conexion->real_escape_string($_POST['consulta']);
        
    	$stmt = $conexion->prepare("SELECT * FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.nombreauto LIKE ? AND imagenes.numero=1");
        $varBuscador = '%'.$buscador.'%';
        $stmt->bind_Param('s', $varBuscador);
    }

    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows>0) {
        
    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr id='fila_".$fila['id']."'>
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
                            <button type='button' class='btn btn-danger' onclick='AlertaEliminacion(".$fila['id'].")'><i class='fas fa-trash-alt'></i></button></td>
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


