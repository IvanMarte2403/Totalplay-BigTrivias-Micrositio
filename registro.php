<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Totalplay Gaming</title>
</head>
<body>
    <form id="registro" method="post" action="forms.php">
        <input type="text" name="nombre_apellidos" placeholder="Nombre y apellidos" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="text" name="genero" placeholder="Genero" required>
        <input type="text" name="celular" placeholder="Celular" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="text" name="numero_cliente_totalplay" placeholder="Número de Cliente Totalplay" required>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>