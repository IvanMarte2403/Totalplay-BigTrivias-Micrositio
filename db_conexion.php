

<?php
// $conexion = new mysqli('localhost', 'totalplaygamingc_admin', '{!)YY6E8dG?0', 'totalplaygamingc_totalplay-dashboard');

// if ($conexion->connect_error) {
//     die("Conexion fallida: " . $conexion->connect_error);
// }


$conexion = new mysqli('localhost', 'root', '', 'totalplay-dashboard');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?> 