<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion | Yonke Universal</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../img/imagesPage/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/estilosLogin.css">
    <!--===============================================================================================-->
  </head>
  <body>
     <nav>
        <div class="logo">
             <a href="../"><img class="bannerImg" src="images/logo.png" width="25%"></a>
        </div>
      </nav>
    
    <div class="login-box">
      <h1>Inicio de sesion</h1>
      <form action="../admin/" method="post">
        <label for="username">Usuario</label>
        <input type="text" name="usuario" placeholder="Ingresa tu nombre de usuario">
        
        <label for="password">Contraseña</label>
        <input type="password" name="contrasena" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Iniciar sesion">
      </form>
    </div>
  </body>
</html>