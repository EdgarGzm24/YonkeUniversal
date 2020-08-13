<?php

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador | Yonke Universal</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/estilosBuscador.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<script src="js/arriba.js"></script>
	<!--===============================================================================================-->
	
</head>

<body>
   <span class="ir-arriba fas fa-arrow-up"></span>
   <div id="modalAuto">
        <!--Aqui estara el popUp con la informacion del auto-->
    </div>

<div class="contenedorTotal">
<!--================================================= MENU ==============================================-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="Index.php"><img class="logoPrincipal" src="img/logoPerron.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['user'])){ ?>
          
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin/VerProductos.php">Ver autos</a>
              <a class="dropdown-item" href="admin/CrearProductos.php">Crear nuevo auto</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="admin/cerrarSesion.php">Cerrar sesion</a>
            </div>
          </li>
          <?php } ?>
          
          <li class="nav-item active">
            <a class="nav-link" href="Index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Buscador.php">Buscador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contactanos.php">Contacto</a>
          </li>
        </ul>
      </div>
    </nav>

<!--=================================================SLIDER==============================================-->   
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>BUSCADOR</h5>
            <p>AQUI ENCONTRARAS EL AUTO QUE NECESITAS </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>BUSCADOR</h5>
            <p>AQUI ENCONTRARAS EL AUTO QUE NECESITAS </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>BUSCADOR</h5>
            <p>AQUI ENCONTRARAS EL AUTO QUE NECESITAS </p>
          </div>
        </div>
      </div>
    </div>

<!--=================================================BUSCADOR==============================================-->
   <div class="contenedorBuscador" id="Buscador">
      <div class="form-box">
          <input class="campo-busqueda auto" name="auto" id="auto" type="text" placeholder="¿Que auto estas buscando?">
          <button class="btn-buscar" type="button"><i class="fas fa-search"></i></button>
      </div>
          <small class="form-box text-muted">Consejo: Puede buscar con Nombre completo del auto, Marca, Modelo o Año.</small>
      
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
          
            <!--====Aqui manda la tabla AJAX, este el espacio para los autos====-->
         
          </tbody>
        </table>
   </div>
   
<!--=================================================FOOTER==============================================-->
    <footer>
       <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1 minimizar">
                    <h1>Informacion de la compañia</h1>
                    <p>Esta compañia se dedica a la venta de piezas y aparatos electronicos con un conjunto de palabras que no tengo ni la menor idea de lo que puede ir aqui, eso lo pondre hasta que me den la descripcion mientras estara este texto llenando el espacio de la informacion de la compañia.</p>
                </div>
                <div class="colum2">
                    <h1 class="minimizar">Redes Sociales</h1>
                    <div class="rows">   
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <label class="minimizar">Siguenos en <a href=""> Facebook</a></label>
                    </div>
                    <div class="rows">   
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <label class="minimizar">Siguenos en <a href=""> Instagram</a></label>
                    </div>
                    <div class="rows">  
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <label class="minimizar">Escribenos por <a href=""> WhatsApp</a></label>
                    </div>
                </div>
                <div class="colum3">
                    <h1 class="minimizar">Informacion de Contacto</h1>
                    <div class="row2">
                        <a href=""><i class="fas fa-map-marker-alt"></i></a>
                        <label>Av Moctezuma 991,
                        Zona Centro 22800
                        Ensenada B.C.</label>
                    </div>
                    <div class="row2 minimizar">
                        <a href=""><i class="fas fa-phone-alt"></i></a>
                        <label>+52 (646)-260-41-30</label>
                    </div>
                    <div class="row2 minimizar">
                        <a href=""><i class="far fa-envelope"></i></a>
                        <label>edjar45@hotmail.com</label>
                    </div>
                </div>
            </div>
        </div>  
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href=""><img class="bannerImg" src="img/logoPerron.png" width="8%"></a>
                    </div>
                </div>
            </div>
    </footer>
</div>
   <script>

        function mostrarDetalles(id){

            var ruta = 'popUpAuto.php?id=' + id;
            $.get(ruta, function (data) {
               $('#modalAuto').html(data);
               $('#modalQuickView').modal('show');
            });

        }
    </script>
    <script src="js/jsBuscador.js"></script>
    <!--==================================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
</body>
</html>