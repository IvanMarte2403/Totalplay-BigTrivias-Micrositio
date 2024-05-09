

<?php
$conexion = new mysqli('localhost', 'bigtriviatotalpl_admin', '{!)YY6E8dG?0', 'bigtriviatotalpl_bigtrivia');

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}


// $conexion = new mysqli('localhost', 'root', '', 'bigtrivia');

// if ($conexion->connect_error) {
//     die("Conexión fallida: " . $conexion->connect_error);
// }

?> 