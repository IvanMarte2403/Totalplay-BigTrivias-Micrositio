<?php
// Iniciar la sesión
session_start();

// Incluir la conexión a la base de datos
include 'db_conexion.php';

// Recibe el puntaje desde la solicitud AJAX
$puntaje = $_POST['puntaje'];
$id_usuario = $_SESSION['id'];

// Prepara la consulta SQL para actualizar el puntaje en la base de datos
$sql = "UPDATE usuarios SET puntaje = puntaje + ? WHERE id = ?";

// Prepara la declaración
$stmt = $conexion->prepare($sql);

// Vincula los parámetros
$stmt->bind_param("ii", $puntaje, $id_usuario);

// Ejecuta la declaración
$stmt->execute();

// Verifica si se actualizó el puntaje
if ($stmt->affected_rows > 0) {
    // Devuelve el puntaje
    echo json_encode(['success' => true, 'puntaje' => $puntaje]);
} else {
    // Devuelve un error
    echo json_encode(['success' => false, 'error' => 'Error al guardar el puntaje: ' . $conexion->error]);
}

// Cierra la declaración y la conexión
$stmt->close();
$conexion->close();
?>