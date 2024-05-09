<?php
session_start(); // Inicia una nueva sesión o reanuda la existente
if(!isset($_SESSION['loggedin'])) { // Si no hay ninguna sesión activa
  header("Location: ../index.php"); // Redirige al usuario a la página de inicio de sesión
  exit; // Termina la ejecución del script
}

include '../db_conexion.php';

$id = $_SESSION['id'];
$puntaje = 0; // Inicializa la variable puntaje

$sql = "SELECT puntaje FROM usuarios WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $puntaje = $user['puntaje'];
} else {
    // Maneja el caso en que no se encontró al usuario
}

$stmt->close();

// Obtén todos los puntajes ordenados de mayor a menor
$resultado = $conexion->query("SELECT id, puntaje FROM usuarios ORDER BY puntaje DESC");

// Convierte el resultado en un array asociativo
$puntajes = $resultado->fetch_all(MYSQLI_ASSOC);

// Encuentra la posición del usuario actual
$posicion = 0;
foreach ($puntajes as $index => $usuario) {
  if ($usuario['id'] == $id) {
    $posicion = $index + 1;
    break;
  }
}

// Obtén los tres jugadores con el puntaje más alto
$resultado = $conexion->query("SELECT nombre_apellidos, puntaje FROM usuarios ORDER BY puntaje DESC LIMIT 3");

// Convierte el resultado en un array asociativo
$jugadores = $resultado->fetch_all(MYSQLI_ASSOC);

$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quizz Totalplay</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/usuario-dashboard.css">
  <link rel="stylesheet" href="css/responsive-dashboard.css">
  <link rel="icon" href="data:,">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/game.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

  <div class="usuario-dashboard">

    <div class="logo-bigTrivia">
      <img src="image/logo-bigTrivia.png" alt="">
    </div>
    <div class="informacion-usuario">
        <img src="image/perfil/perfil-1.jpg" alt="">
        <h3><?php echo $_SESSION['nombre_apellidos']; ?></h3>
        <p>ID: #<?php echo $_SESSION['id']; ?></p>
    </div>    


    <div class="puntaje">
      <h3>Puntaje: </h3>
  <p><?php echo $puntaje; ?></p>
    </div>

    <div class="dashboard-posicion-global">
      <h3>Ranking Mundial</h3>
      <div class="posicion-jugador">
        <p>Eres el jugador No. </p> 
        <p>Posición: <?php echo $posicion; ?>     </div>
      

        <?php
          // Imprime los jugadores
          foreach ($jugadores as $index => $jugador) {
            echo '<div class="perfil-ranking">';
            echo '<p>#' . ($index + 1) . '</p>';
            echo '<p id="usuario-ranking">' . $jugador['nombre_apellidos'] . '</p>';
             echo '<p>Puntaje: ' . $jugador['puntaje'] . '</p>';
            echo '</div>';
            }
?>



    </div>
  </div>
  
  <div class="container">
    <div class="vara"></div>
    <!-- =======contenedor Ruleta de Imagen=========== -->
    <div class="contenedor-imagen">
      <img src="image/imagen.png" id="ruleta">
    </div>

    <!-- ============Seccion de Dasboard================ -->

    <div class="premio">
      <p id="puntaje-partida"></p>
      <p id="puntaje-total"></p>
      <p class="quizzSeleccionado">Selecciona el Centro para Comenzar </p>
      <p id="temporizador-pregunta" style="display: none;"></p>
    </div>

    <div id="contenedor-preguntas">

    </div>
    <div id="contenedor-respuestas">

    </div>

    <div id="contenedor-boton" style="display: none">
        <a id="boton-guardar"  href="#">Guardar Puntaje</a>
    </div>
    <!-- <p class="contador">Turnos: 0</p> -->
    
  </div>

 

  


  <div>
    <div id="sonido" style="display: none;">
      <iframe src="sonido/ruleta.mp3" id="audio"></iframe>

    </div>
  </div>
  
<script>
var idDelUsuario = <?php echo $_SESSION['id']; ?>;
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/preguntas.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>