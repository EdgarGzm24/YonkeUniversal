<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion | Yonke Universal</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/icon/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="../css/estilosLogin.css">
    <!--===============================================================================================-->
  </head>
  <body>
     <nav>
        <div class="logo">
             <a href="Index.html"><img class="bannerImg" src="../img/logoPerron.png" width="50%"></a>
        </div>
      </nav>
    
    <div class="login-box">
      <h1>Inicio de sesion</h1>
      <form action="validarUsuario.php" method="post">
        <label for="username">Usuario</label>
        <input type="text" name="usuario" placeholder="Ingresa tu nombre de usuario">
        
        <label for="password">Contraseña</label>
        <input type="password" name="contrasena" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Iniciar sesion">
      </form>
    </div>
  </body>
</html>