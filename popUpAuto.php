<?php
    session_start();
    $usuario = $_SESSION['user'];

    if(!isset($usuario)){
        header("location: ../Index.php");
    }

    $id = 66;
    require_once 'conexion.php';

    $stmt = $conexion->prepare("SELECT nombreauto, estado, cilindros, Motor, transmision, GROUP_CONCAT(imagenes.nombre SEPARATOR '|') AS images FROM tbautos INNER JOIN imagenes ON tbautos.id = imagenes.idAuto WHERE tbautos.id = ?");
    $stmt->bind_Param('i', $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $info = $resultado->fetch_assoc();

echo "
<div class='modal fade' id='modalQuickView' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
    <div class='modal-content'>
      <div class='modal-body'>
        <div class='row'>
          <div class='col-lg-5'>

            <div id='carousel-thumb' class='carousel slide carousel-fade carousel-thumbnails'
              data-ride='carousel'>

              <div class='carousel-inner' role='listbox'>";

                $imagen = explode("|", $info['images']);

                foreach($imagen as $imagenRow){
                    echo "<div class='carousel-item active'>
                      <img class='d-block w-100' src='img/".$imagenRow."' >
                    </div>";
                }

              echo "</div>

              <a class='carousel-control-prev' href='#carousel-thumb' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href='#carousel-thumb' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>

              <ol class='carousel-indicators'>";
            foreach($imagen as $imagenRow){
            $i = 0;    
                echo "<li data-target='#carousel-thumb' data-slide-to='".$i."'>
                      <img src='img/".$imagenRow."' width='60'>
                    </li>";
            $i++;
            }  

            echo "</ol>
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class='col-lg-7'>
            <h2><strong>".$info['nombreauto']."</strong></h2>
                <p>Estado: ".$info['estado']."</p>
                <p>Cilindros: ".$info['cilindros']."</p>
                <p>Motor: ".$info['Motor']."</p>
                <p>Transmision: ".$info['transmision']."</p>
                <a class='btn-close-popup' data-dismiss='modal'><i class='fas fa-times'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";

?>
