<?php
include("../login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UCM Data Visor Log-In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="caja1"> <!--caja principal con el contenido del login-->

        <form method="POST" action="../login.php"> <!--formulario que envia los datos mediante POST a login.php-->
            <div class="formtlo"> Iniciar sesión</div> <!--"Iniciar sesion"-->
                <?php
                    if (isset($_GET['error']) && is_numeric($_GET['error'])) {
                        $error = (int)$_GET['error'];  // Convertir el valor a entero

                        switch ($error) {
                            case 1:
                                echo "Usuario o contraseña no válidas.";
                                break;
                            case 2:
                                echo "Debes iniciar sesión primero.";
                                break;
                            default:
                                echo "Error técnico. Reporte generado.";
                                break;
                        }
                    }
                ?>
            <div class="dialogoInput"> Ingresar usuario</div>
            <input type="text" name="user" id="user" required>
            <div class="dialogoInput"> Ingresar password</div>
            <input type="password" name="password" id="password" required>

            <div class="dialogoInput"> <!--Casilla que permite visualizar la contraseña -->
                <input type="checkbox" onclick="verpassword()" id="show_password"> Mostrar contraseña
            </div>

            <div class="recuperar"> <!--|||||||||||||||||||(PENDIENTE)|||||||||||||||||||   -->
                <a href="#"><p>Recuperar contraseña</p></a>
            </div>

            <div align="center"> <!--Boton de enviar-->
                <input type="submit" value="Ingresar">
            </div>
        </form>
    </div>
    
<!-- Permite visualizar la contraseña-->
    <script>
        function verpassword(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            } else {
                tipo.type = "password";
            }
        }
    </script>
</body>

</html>