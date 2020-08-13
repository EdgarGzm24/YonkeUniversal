<?php
$id = $_REQUEST['id'];
require_once 'conexion.php';
$consulta = $conexion->query("SELECT * FROM tbautos WHERE id=$id");
$info = $consulta->fetch_assoc();

echo "
<div class='modal fade' id='modalQuickView' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-xl' role='document'>
    <div class='modal-content'>
      <div class='modal-body'>
        <div class='row'>
          <div class='col-lg-5'>

            <div id='carousel-thumb' class='carousel slide carousel-fade carousel-thumbnails'
              data-ride='carousel'>

              <div class='carousel-inner' role='listbox'>
                <div class='carousel-item active'>
                  <img class='d-block w-100' src='' >
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='' >
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='' >
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='' >
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='' >
                </div>
                <div class='carousel-item'>
                  <img class='d-block w-100' src='' >
                </div>
              </div>

              <a class='carousel-control-prev' href='#carousel-thumb' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href='#carousel-thumb' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>

              <ol class='carousel-indicators'>
                <li data-target='#carousel-thumb' data-slide-to='0' class='active'>
                  <img src='' width='60'>
                </li>
                <li data-target='#carousel-thumb' data-slide-to='1'>
                  <img src='' width='60'>
                </li>
                <li data-target='#carousel-thumb' data-slide-to='2'>
                  <img src='' width='60'>
                </li>
                <li data-target='#carousel-thumb' data-slide-to='3'>
                  <img src='' width='60'>
                </li>
                <li data-target='#carousel-thumb' data-slide-to='4'>
                  <img src='' width='60'>
                </li>
                <li data-target='#carousel-thumb' data-slide-to='5'>
                  <img src='' width='60'>
                </li>
              </ol>
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
  

  
  

