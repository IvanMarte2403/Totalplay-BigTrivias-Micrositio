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
    header('Location: juego-1/dashboard.php'); // Redirige a juego-1/index.html
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>