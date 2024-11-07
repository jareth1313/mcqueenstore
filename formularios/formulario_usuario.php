<?php
    include('nav_forms.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro McQueen</title>
    <link rel="stylesheet" href="../css/formularios.css">

</head>
<body>

    <div class="register-container">
        <form action="insertar_usuario.php" method="POST">
            <h2>Registro</h2>

            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="apellido_paterno">Apellido paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required>

            <label for="apellido_materno">Apellido materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno">

            <label for="correo">Correo (E-mail):</label>
            <input type="email" id="correo" name="correo" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>

            <input type="submit" value="Guardar">

            <div class="session">
                <p>¿Ya tienes una cuenta?</p>
                <p><a href="../login.php">Inicia sesión</a></p>
            </div>
        </form>
    </div>

</body>
</html>