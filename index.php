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

                      <!-- ========Enlace de Registro o Inicio de Sesión============ -->
                    <p id="toggle-text">¿No tienes una cuenta? <a id="toggle-link" href="#" onclick="toggleForm()">Regístrate aquí</a>.</p>
                
                        <div class="redes-sociales">
                            <a href="https://m.facebook.com/totalplay/?wtsid=rdr_0PdB1QVabuErDhxmW" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/totalplaymx/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@totalplaymx" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://twitter.com/totalplaymx" target="_blank"><i class="fas fa-times"></i></a>
                        </div>
                    
                    <input class="boton-iniciar-sesion" type="submit" value="Iniciar sesión">
                </form>


                <div class="terminos-condiciones">
                        <label for="terminos" id="terminosLabel">He leído los <span class="texto-terminos-condiciones">términos y condiciones</span></label>
                        <input type="checkbox" id="terminos" name="terminos" required>    
                </div>

              

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

          

        </div>


        <div class="espacio-register">
           
        </div>
           
    </div>

       <!-- Ventana emergente de términos y condiciones -->

      <div id="terminosPopup" style="display: none;" class="popup">
                    <div class="popup-content">

                      <h2>TÉRMINOS Y CONDICIONES DE LA DINÁMICA</h2>
                      <h2>“TOTALPLAY BIG TRIVIA CHAMPIONS MAX”</h2>
                         <p>Totalplay llevará a cabo la dinámica “TOTALPLAY BIG TRIVIA CHAMPIONS MAX” para
                        los clientes de @totalplaymx</p>

                        <p>
                        La dinámica consistirá en:
                        1.- Ingresar al sitio de Totalplay para consultar los términos y condiciones de la
                        dinámica “TOTALPLAY BIG TRIVIA CHAMPIONS MAX” que se publicarán en el sitio
                        oficial de Totalplay https://www.totalplay.com.mx/promociones. Los usuarios podrán
                        participar a partir del 18 de Mayo 2023 2:00 pm hasta el día 27 de Mayo 2023 2:00 pm.
                        </p>

                        <p>2.- Los participantes deberán ser clientes de Totalplay, tener paquete HBO con acceso
                        a Max y estar al corriente con sus pagos durante la vigencia de la dinámica.</p>


                        <p>
                        3.- GANA: Los primeros 15 clientes en contar con el mejor puntaje y en contestar.
                        </p>


                        <p> 
                        4.- EL PREMIO: Un pase doble para la Watch Party especial de la final de la Champions League con MAX en la CDMX. (con valor de $3200 pesos)
                        </p>

                        <p>
                        *Dentro de la trivia hay un total de 5 categorías cada una con 3 preguntas. Cada
                        participante podrá jugar 3 categorías con un total de 9 preguntas. Las categorías serán:
                        Jugadores, Estadios, Partidos, Personajes e Historia. Y serán seleccionadas aleatoriamente.
                        </p>


                        <p>
                        El anuncio de los ganadores se llevará a cabo el día 30 de Mayo conforme se vaya
                        verificando que cumplan con los pasos anteriormente descritos.
                        </p>


                        <p>
                        5.- Los ganadores serán contactados a partir del 30 de Mayo, por llamada telefónica,
                        para corroborar sus datos. Deberán contestar dentro de las primeras 6 horas
                        posteriores, de lo contrario se contactará a la siguiente persona ganadora en posición
                        descendente. Posteriormente se les notificará por correo electrónico la confirmación de
                        que son acreedores al premio, con los detalles para canjear el pase
                        </p>


                        <p>
                        6.- La participación de los ganadores será validada a través de los datos que
                        proporcionaran en nuestra plataforma gamer https://bigtriviatotalplay.com donde
                        solicitamos Nombre, Teléfono, Correo Electrónico y Número de cuenta
                        </p>

                        <p>
                        7.- Los ganadores deberán acudir con su identificación oficial a recoger su premio en
                        las oficinas de Totalplay ubicadas en Avenida San Jerónimo número 252, Colonia La
                        Otra Banda, Código Postal 04519, Alcaldía Coyoacán, Ciudad de México. Dentro del
                        horario de 10:00 am a 2:00 pm y de 4:00 pm a 6:00 pm, de lunes a viernes a partir de la
                        fecha acordada con Totalplay
                        </p>

                        <h2>Podran participar personas con los siguientes requisitos: </h2>

                        <p>Podrán participar las personas que cumplan con los siguientes requisitos:

                            1. Los participantes deberán ser clientes de Totalplay, tener paquete HBO con acceso a
                            Max y estar al corriente con sus pagos durante la vigencia de la dinámica. <br> <br>

                            2. No participan empleados de Totalplay, de sus subsidiarias, filiales, o terceras que
                            tengan relación contractual directa o indirectamente con éstas. <br> <br>

                            3. En caso de ser detectadas conductas inapropiadas y engañosas por parte de alguno
                            de los participantes, tales como los que a continuación se señalan, de manera
                            enunciativa más no limitativa, siendo los siguientes: que se presuma la existencia de
                            robo de identidad plagio o cualquier otra situación que atente en contra de la moral,
                            las buenas costumbres y vaya en contra de las políticas de la empresa, Totalplay se
                            reserva el derecho a descalificar sin responsabilidad alguna para Totalplay. <br> <br>


                            4. Sólo se considerará válida la participación de aquellos clientes que cumplan los
                            requisitos de participación aquí descritos, para poder ser considerados como
                            ganadores, en caso de que resulten serlo. <br> <br>

                            5. El premio no es transferible y no podrá ser canjeado por dinero en efectivo. <br> <br>
                            6. En caso de empate este se justifica con el tiempo en el que el usuario se tardó en
                            contestar las preguntas. <br> <br>

                            7. Totalplay no es responsable si el “ganador” pierde su premio por no poder ser
                            contactado en las fechas y bajo los términos anteriormente establecidos. Totalplay
                            no se hace responsable por el mal uso de los premios por parte del participante. <br> <br>

                            8. Sólo se considerará válida la participación de aquellos clientes que cumplan con los
                            requisitos señalados en los presentes términos y condiciones, para poder ser
                            considerados como ganadores, en caso de que resulten serlo. <br> <br>

                            9. Totalplay NO es responsable si el “ganador” no hace válido su premio en las fechas y
                            bajo los términos anteriormente mencionados. <br>
                            <br>
                            10. Totalplay se deslinda de toda responsabilidad futura una vez entregado el premio al
                            Ganador, esto por cuanto al servicio, cambio sin previo aviso por motivos de causa
                            mayor, mal funcionamiento, cuestiones técnicas y otras relacionadas con el premio. <br> <br>

                            11. En caso de que el ganador no acepte el premio, así como los términos y
                            condiciones, el premio pasará al siguiente ganador en lista descendente <br><br>
                        </p>

                         <button id="cerrarPopup">Cerrar</button>

                    </div>

                </div>

      </div>
   
    <script src="main/terminos-condiciones.js"></script>
    <script src="main/formulario-change-forms.js"></script>

</body>
</html>