<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion | Yonke Universal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../img/imagesPage/engrane.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/estiloLogin.css">
</head>
<body>
    <form action="../admin/" method="post" class="login-form">
        <a href="../"><img class="bannerImg" src="images/logo.png" width="40%"></a>
        <h1>INICIO DE SESION</h1>
        
        <div class="textb">
            <input type="text" name="usuario" required>
            <div class="placeholder">Usuario</div>
        </div>

        <div class="textb">
            <input type="password" name="contrasena" required>
            <div class="placeholder">Contraseña</div>
            <div class="show-password fas fa-eye-slash"></div>
        </div>

        <button class="btn fas fa-arrow-right" disabled></button>
        <a onclick = "contacto()">Olvidaste tu contraseña?</a>
    </form>

    <script>
        var fields = document.querySelectorAll(".textb input");
        var btn = document.querySelector(".btn");
        function check(){
          if(fields[0].value != "" && fields[1].value != "")
            btn.disabled = false;
          else
            btn.disabled = true;  
        }

        fields[0].addEventListener("keyup",check);
        fields[1].addEventListener("keyup",check);

        document.querySelector(".show-password").addEventListener("click",function(){
          if(this.classList[2] == "fa-eye-slash"){
            this.classList.remove("fa-eye-slash");
            this.classList.add("fa-eye");
            fields[1].type = "text";
          }else{
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
            fields[1].type = "password";
          }
        });

        function contacto() {
            Swal.fire(
              'Contacte con el admin',
              'Para que le puedan restablecer su contraseña',
              'info'
            )
        }
    </script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>