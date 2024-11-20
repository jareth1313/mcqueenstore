<?php
    include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro McQueen</title>
    <link rel="stylesheet" href="css/formularios.css?a=2">

</head>
<body>

    <div class="register-container">
        <form action="formularios/insertar_usuario.php" method="POST">
            <h2>Registro</h2>

            <label for="username">Calle:</label>
            <input type="text" id="username" name="calle" required>

            <label for="apellido_paterno">Colonia:</label>
            <input type="text" id="apellido_paterno" name="colonia" required>

            <label for="apellido_materno">Número exterior:</label>
            <input type="text" id="apellido_materno" name="num_exterior">

            <label for="correo">Referencia:</label>
            <input type="text" id="correo" name="referencia" required>

            <input type="submit" value="Guardar">
        </form>
    </div>

</body>
</html>