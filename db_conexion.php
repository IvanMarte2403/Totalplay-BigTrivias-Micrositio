

<?php
// $conexion = new mysqli('localhost', 'bigtriviatotalpl_bigtrivia-new', 'M$rte24i', 'bigtriviatotalpl_bigtrivia');

// if ($conexion->connect_error) {
//     die("Conexion fallida: " . $conexion->connect_error);
// }


$conexion = new mysqli('localhost', 'root', '', 'bigtrivia');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?> 