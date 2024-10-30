<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro McQueen</title>
</head>
<body>

    <form action="insertar_usuario.php" method="POST">
        <label>Nombre de usuario:</label> <br>
        <input type="text" name="username" required> <br><br>
        <label>Apellido paterno:</label> <br>
        <input type="text" name="apellido_paterno" required> <br><br>
        <label>Apellido materno:</label> <br>
        <input type="text" name="apellido_materno"> <br><br>
        <label>Correo (e-mail):</label> <br>
        <input type="text" name="correo" required> <br><br>
        <label>Contraseña:</label> <br>
        <input type="password" name="pass" required> <br><br>

        <input type="submit" value="Guardar">
    </form>

</body>
</html>