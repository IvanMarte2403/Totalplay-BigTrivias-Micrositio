<?php
$nombre_apellidos = $_POST['nombre_apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$genero = $_POST['genero'];
$celular = $_POST['celular'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$numero_cliente_totalplay = $_POST['numero_cliente_totalplay'];

include 'db_conexion.php';

$sql = "INSERT INTO usuarios (nombre_apellidos, email, contrasena, genero, celular, fecha_nacimiento, numero_cliente_totalplay) VALUES ('$nombre_apellidos', '$email', '$contrasena', '$genero', '$celular', '$fecha_nacimiento', '$numero_cliente_totalplay')";

if ($conexion->query($sql) === TRUE) {
    // Inicia una nueva sesión
    session_start();
    // Establece las variables de sesión
    $_SESSION['loggedin'] = true;
    $_SESSION['nombre_apellidos'] = $nombre_apellidos;
    $_SESSION['id'] = $conexion->insert_id; // Obtiene el ID del último registro insertado
    // Redirige al usuario a dashboard.php
    header('Location: juego-1/dashboard.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>