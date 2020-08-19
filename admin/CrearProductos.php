<?php

session_start();
$usuario = $_SESSION['user'];

if(!isset($usuario)){
    header("location: ../Index.php");
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Administradores | Yonke Universal</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="icon" type="image/png" href="../img/icon/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/estilosSubir.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    
</head>

<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-title">Elementos productos</li><!-- /.menu-title -->
                <li class="menu-item">
                    <a href="../admin/"><i class="menu-icon fas fa-car"></i>Productos </a>
                </li>
                <li class="active">
                    <a href="../admin/CrearProductos.php"><i class="menu-icon fas fa-plus"></i>Crear </a>
                </li>
                <li class="menu-title">Pagina principal</li><!-- /.menu-title -->
                <li class="menu-item">
                    <a href="../"><i class="menu-icon fas fa-home"></i>Inicio </a>
                </li>
                <li class="menu-item">
                    <a href="../Buscador.php"><i class="menu-icon fas fa-search"></i>Buscador </a>
                </li>
                <li class="menu-item">
                    <a href="../contactos/Index.php"><i class="menu-icon fas fa-phone-alt"></i>Contactanos </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="../"><img src="images/logo.png" alt="Logo" width="80"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Cerrar sesion</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-title">
                        <h4 class="box-title">Subir autos </h4>
                    </div>
                    <div class="card-body">
                            <form method="post" enctype="multipart/form-data" id="frmAjax">
                              <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">

                              <div class="form-row">  
                                <div class="form-group col-md-3">
                                  <input type="text" class="campo-subir nomCom" name="nombreauto" id="inputNombre" placeholder="Nombre completo del vehiculo" readonly>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-3">
                                  <input type="text" class="campo-subir width" name="marca" id="inputMarca" placeholder="Marca" onkeyup="enviarTexto()" required>
                                </div>
                                <div class="form-group col-md-3">
                                  <input type="text" class="campo-subir width" name="modelo" id="inputModelo" placeholder="Modelo" onkeyup="enviarTexto()" required>
                                </div>
                                <div class="form-group col-md-3">
                                  <input type="number" class="campo-subir anio" name="anio" id="inputAnio" placeholder="Año" onkeyup="enviarTexto()" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-2">
                                  <input type="text" class="campo-subir width" name="estado" id="inputEstado" placeholder="Estado" required>
                                </div>
                                <div class="form-group col-md-2">
                                  <input type="text" class="campo-subir width" name="cilindros" id="inputCilin" placeholder="Cilindros" required>
                                </div>
                                <div class="form-group col-md-2">
                                  <input type="text" class="campo-subir width" name="Motor" id="inputMotor" placeholder="Motor" required>
                                </div>
                                <div class="form-group col-md-2">
                                  <input type="text" class="campo-subir width" name="transmision" id="inputTrans" placeholder="Transmision" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-1" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-1"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-1">
                                        <img src="" alt="" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-2" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-2"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-2">
                                        <img src="" alt="" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-3" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-3"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-3">
                                        <img src="" alt="" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-4" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-4"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-4">
                                        <img src="" alt="" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-5" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-5"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-5">
                                        <img src="" alt="" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image[]" id="file-6" class="inputfile inputfile-2" accept="image/*"/>
                                    <label for="file-6"><i class="far fa-file-image"></i><span class="inputfileCustom">Agrega una foto</span></label>
                                    <div class="image-preview" id="image-preview-6">
                                        <img src="" alt="Image Preview" class="image-preview__img">
                                        <span class="image-preview__txt" id="image-preview__txt">Vista previa</span>
                                    </div>
                                </div>
                              </div>

                              <input type="hidden" name="submit" id="btnGuardar">
                              <input type="submit" id="btnGuardar" class="btn btn-dark">
                            </form>
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->
        </div>
    </div>
    <!-- /.orders -->
    </div>
    <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2020 Yonke Universal
                </div>
                <div class="col-sm-6 text-right">
                    Diseñada por <a href="#">YK</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

    <!-- Scripts -->
    <script>
        function enviarTexto() {
            var marca = document.getElementById("inputMarca").value;
            var modelo = document.getElementById("inputModelo").value;
            var anio = document.getElementById("inputAnio").value;

            document.getElementById("inputNombre").value = marca + " " + modelo + " " + anio;
        }

    </script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/insertar.js"></script>
    <script src="assets/js/ImagePreview.js"></script>
    <!--===============================================================================================-->
    <script src="assets/js/custom-file-input.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--==================================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <!--===============================================================================================-->

</body>
</html>
