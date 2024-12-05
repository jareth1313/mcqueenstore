<?php
    include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro McQueen</title>
    <link rel="stylesheet" href="">

</head>
<body>

    <div class="register-container">
        <form action="formularios/insertar_admin.php" method="POST">
            <h2>Registro De Administrador</h2>
            
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username_admin" required>

            <label for="apellido_paterno">Apellido paterno:</label>
            <input type="text" name="apellido_paterno_admin" required>

            <label for="apellido_materno">Apellido materno:</label>
            <input type="text" name="apellido_materno_admin">

            <label for="correo">Correo (E-mail):</label>
            <input type="email" name="correo_admin" required>

            <label for="pass">Contraseña:</label>
            <input type="password" name="pass_admin" required>

            <input type="submit" value="Guardar">

        </form>
    </div>

</body>
</html>