<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>BigTrivia</title>
</head>
<body>


    <div class="container">
        <div class="contenedor-imagen" style="display:none">
        <img src="img/copa-2.png" >

        </div>
        <div class="container-register">

            <!-- =======Formulario de Inicio de Sesión======= -->

            <div id="login-form" class="container-forms" >
                <h2> Iniciar Sesión </h2>

                <form action="login.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                    <div class="terminos-condiciones">
                        <label for="terminos">He leído los términos y condiciones</label>
                        <input type="checkbox" id="terminos" name="terminos" required>    
                    </div>
                        <div class="redes-sociales">
                            <a href="https://m.facebook.com/totalplay/?wtsid=rdr_0PdB1QVabuErDhxmW" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/totalplaymx/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@totalplaymx" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://twitter.com/totalplaymx" target="_blank"><i class="fas fa-times"></i></a>
                        </div>
                    
                    <input class="boton-iniciar-sesion" type="submit" value="Iniciar sesión">
                </form>
               
            </div>

            <!-- =======Formulario de Registro ======= -->
            <div id="register-form" class="container-forms" style="display: none;">
                <h2> Registro </h2>

                <form id="registro" method="post" action="forms.php">
                    <input type="text" name="nombre_apellidos" placeholder="Nombre y apellidos" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <input type="text" name="genero" placeholder="Genero" required>
                    <input type="text" name="celular" placeholder="Celular" required>
                    <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
                    <input type="text" name="numero_cliente_totalplay" placeholder="Número de Cliente Totalplay" required>
                    <input class="boton-registrarse" type="submit" value="Registrarse">
                </form>
            </div>

            <!-- ========Enlace de Registro o Inicio de Sesión============ -->
            <p id="toggle-text">¿No tienes una cuenta? <a id="toggle-link" href="#" onclick="toggleForm()">Regístrate aquí</a>.</p>

        </div>


        <div class="espacio-register">
           
        </div>
           
    </div>

    </div>

    <script src="main/formulario-change-forms.js"></script>

</body>
</html>