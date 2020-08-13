<?php

session_start();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio | Yonke Universal</title>
    
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/icon/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/estilosIndex.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" charset="utf-8"></script>
    
</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=526461177603&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20un%20auto." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
<!--====================================VENTANA MODAL===================================================-->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/sentra1.jpg" alt="Primer slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/sentra2.jpg" alt="Segundo slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/sentra3.jpg" alt="Tercer slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/sentra4.jpg" alt="Cuarto slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/sentra5.jpg" alt="Quinto slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/sentra6.jpg" alt="Sexto slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <ol class="carousel-indicators">
                <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                  <img src="img/sentra1.jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="1">
                  <img src="img/sentra2.jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="2">
                  <img src="img/sentra3.jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="3">
                  <img src="img/sentra4.jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="4">
                  <img src="img/sentra5.jpg" width="60">
                </li>
                <li data-target="#carousel-thumb" data-slide-to="5">
                  <img src="img/sentra6.jpg" width="60">
                </li>
              </ol>
            </div>
          </div>
          <div class="col-lg-7">
            <h2><strong>Nissan Sentra 2012</strong></h2>
                <p>Estado: </p>
                <p>Cilindros: </p>
                <p>Motor: </p>
                <p>Transmision: </p>
                <a class="btn-close-popup" data-dismiss="modal"><i class="fas fa-times"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--================================================= MENU ==============================================-->   
<div class="contenedorTotal">
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
            <h5>YONKE UNIVERSAL</h5>
            <p>SERVICIOS, AUTOPARTES &amp; MAS...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>YONKE UNIVERSAL</h5>
            <p>SERVICIOS, AUTOPARTES &amp; MAS...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>YONKE UNIVERSAL</h5>
            <p>SERVICIOS, AUTOPARTES &amp; MAS...</p>
          </div>
        </div>
      </div>
    </div>
    
<!--=================================================PUNTOS CENTRALES=======================================--> 

 <section class="services-section">
   <div class="inner-width">
        <h1>Nuestros <span class="textColor">Servicios</span></h1>
     <div class="services owl-carousel">
            
          <div class="service">
            <div class="service-icon">
              <i class="fas fa-box-open"></i>
            </div>
            <div class="service-name">Envios</div>
            <div class="service-desc">Contamos con servicio de paqueteria, por el momento solo al estado de: Baja California Sur.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-hammer"></i>
            </div>
            <div class="service-name">Refacciones</div>
            <div class="service-desc">Nosotros nos preocupamos por nuestros clientes, si no tenemos la pieza que necesitas te la buscamos.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-medal"></i>
            </div>
            <div class="service-name">Especialidad</div>
            <div class="service-desc">Nuestro equpo se especializa en el apartado de sistemas electronicos vehiculares.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="far fa-user-circle"></i>
            </div>
            <div class="service-name">Cliente</div>
            <div class="service-desc">Aqui no se que poner la verdad, pero hay buen trato del vendedor al cliente.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <div class="service-name">Contacto</div>
            <div class="service-desc">Tenemos un horario de Lun. a Vie. de 8:00am a 5:00pm, donde puedes ponerte en contacto con nosotros.</div>
          </div>
        </div>
      </div>
    </section>
     
<!--=================================================AUTOS RECIENTES========================================-->  
    <div class="containerAll-Autos">
       <div class="tituloAutos">
           <h1>RECIEN LLEGADOS</h1>
       </div>
        
         <div class="seccionAutos">
                <div class="card">
                    <img src="img/sentra1.jpg" alt="">
                    <h4>NISSAN SENTRA 2012</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, mollitia.</p>
                    <a data-toggle="modal" data-target="#modalQuickView">MAS DETALLES</a>
                </div>
                <div class="card">
                    <img src="img/sentra2.jpg" alt="">
                    <h4>NISSAN SENTRA 2012</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, iure?</p>
                    <a data-toggle="modal" data-target="#modalQuickView">MAS DETALLES</a>
                </div>
                <div class="card">
                    <img src="img/sentra3.jpg" alt="">
                    <h4>NISSAN SENTRA 2012</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dolorem!</p>
                    <a data-toggle="modal" data-target="#modalQuickView">MAS DETALLES</a>
                </div>
		  </div>
		  <div class="textoBuscador">
            <div class="textoBusc">
              <p>Tenemos un buscador totalmente personalizado para tus necesidades con tan solo escribir el año, marca o modelo tendras un listado de todos los autos parecidos a los de tu busqueda que podrian interesarte</p>
            </div>
            <div class="botonBusc">
              <a href="Buscador.php#Buscador" class="button"><i class="fas fa-search"></i> Ver mas</a>
            </div>
		  </div>    
    </div>
    
<!--================================================GALERIA AUTOS========================================--> 

<div class="container gallery-container">

    <h1>Autopartes</h1>

    <p class="page-description text-center">A continuacion puede observar con detenimiento las distintas opciones que tenemos a la venta.</p>
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/sentra1.jpg">
                    <img src="img/sentra1.jpg" >
                </a>
            </div>
        </div>

    </div>

</div>

<!--=====================================================FOOTER=============================================-->
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
      $(".services").owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });
    </script>
    <!--==================================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <!--==================================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
</body>
</html>