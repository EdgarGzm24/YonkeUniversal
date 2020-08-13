<?php
require_once('../../core/config.php');
include('../../conexion.php');

session_start();
//$_SESSION['id'] = 1;
//echo $_SESSION['id'];
require_once('../validarProducto.php');
?>    
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administradores | Yonke Universal</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo BASEURL; ?>img/icon/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/estilosAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<script src="<?php echo BASEURL; ?>js/arriba.js"></script>
	
</head>
<body>
    <span class="ir-arriba fas fa-arrow-up"></span>
    <div id="modalAuto">
        <!--Aqui estara el popUp con la informacion del auto-->
    </div>
    
    <!--================================================= MENU ==============================================-->   
<div class="contenedorTotal">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="<?php echo BASEURL; ?>">
      <img class="logoPrincipal" src="<?php echo BASEURL; ?>img/logoPerron.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo BASEURL; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Inicio
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo BASEURL; ?>Buscador.php">Buscador</a>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>Contactanos.php">Contactanos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Cerrar sesion</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Buscador">List. Autos</a>
          </li>
        </ul>
      </div>
    </nav>

<!--=================================================SLIDER==============================================-->  
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo BASEURL; ?>img/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>ADMINISTRADORES</h5>
            <p>En esta pagina agregaras, editaras y eliminaras autos de la lista de busqueda.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo BASEURL; ?>img/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>ADMINISTRADORES</h5>
            <p>En esta pagina agregaras, editaras y eliminaras autos de la lista de busqueda.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo BASEURL; ?>img/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>ADMINISTRADORES</h5>
            <p>En esta pagina agregaras, editaras y eliminaras autos de la lista de busqueda.</p>
          </div>
        </div>
      </div>
    </div>
<!--===========================================FORMULARIO AUTOS============================================-->
    <div class="container form">
        <h2 class="page-section-heading text-left text-uppercase mb-0" id="form">Formulario</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#form" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
            <input type="text" class="form-control" name="nombreauto" id="inputNombre" placeholder="Nombre completo del vehiculo" readonly>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <input type="text" class="form-control" name="marca" id="inputMarca" placeholder="Marca" onkeyup="enviarTexto()" required>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" name="modelo" id="inputModelo" placeholder="Modelo" onkeyup="enviarTexto()" required>
            </div>
            <div class="form-group col-md-1">
              <input type="number" class="form-control" name="anio" id="inputAnio" placeholder="Año" onkeyup="enviarTexto()" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="estado" id="inputEstado" placeholder="Estado" required>
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="cilindros" id="inputCilin" placeholder="Cilindros" required>
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="Motor" id="inputMotor" placeholder="Motor" required>
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" name="transmision" id="inputTrans" placeholder="Transmision" required>
            </div>
          </div>
          <div class="form-group">
            <input type="file" class="form-control-file" name="imagen[]" value="" multiple required>
          </div>
          <input type="submit" name="submit" class="btn btn-dark"></input>
        </form>
    </div>
    
<!--=================================================BUSCADOR==============================================-->
   <div class="contenedorBuscador" id="Buscador">
     <h2 class="page-section-heading text-left text-uppercase mb-0">Listado de Autos</h2>
      <div class="form-box">
          <input class="campo-busqueda auto" name="auto" id="auto" type="text" placeholder="¿Que auto estas buscando?">
          <button class="btn-buscar" type="button"><i class="fas fa-search"></i></button>
      </div>
          <small class="form-box text-muted">Consejo: Puede buscar con Nombre completo del auto, Marca, Modelo o Año.</small>
          
        <div class="SelecAutos">
            <div class="Disp form-check form-check-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label for="inlineRadio1">Disponibles</label>
            </div>
            <div class="Elim form-check form-check-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label for="inlineRadio2">Eliminados</label>
            </div>
        </div>
        
       <table class="content-table">
          <thead>
            <tr>
              <th></th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Año</th>
            </tr>
          </thead>
          <tbody id="caja_autos">
          
            <!--====Aqui manda la tabla con AJAX, este es el espacio para los autos====-->
         
          </tbody>
        </table>
   </div>
    
</div>
   
    <script>

        function mostrarDetalles(id){

            var ruta = 'popUpAuto.php?id=' + id;
            $.get(ruta, function (data) {
               $('#modalAuto').html(data);
               $('#modalQuickView').modal('show');
            });

        }
        
        function enviarTexto() {
            var marca = document.getElementById("inputMarca").value;
            var modelo = document.getElementById("inputModelo").value;
            var anio = document.getElementById("inputAnio").value;
            
            document.getElementById("inputNombre").value = marca + " " + modelo + " " + anio;
        }
        
        
    </script>
    <script src="<?php echo BASEURL; ?>js/jsBuscador.js"></script>
    <!--==================================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
</body>
</html>