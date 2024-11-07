<?php
    include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login McQueen Store</title>
    <link rel="stylesheet" href="css/formularios.css">
</head>
<body>
    
    <div class="login-container">
        <form action="validar.php" method="POST">
            <h2>Iniciar sesión</h2>

            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" required>

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" required>
            
            <input type="submit" value="Iniciar sesión">
            
            <div class="register">
                <p>¿Eres nuevo?</p>
                <p><a href="formularios/formulario_usuario.php">Regístrate ahora</a></p>
            </div>
        </form>
    </div>

<!-- Se conecta de de Formulario Usuario > insertar usuario > Usuario > Login > validar desde conexión conecta con la base de datos para insertar y consultar, pero tambien se tiene que hacer el registro con formulario usuario e insertar usuario, que es lo previo al login, primero te registras, luego inicias sesión
 
el formulario cumple la función de ser la parte visual del registro al igual que el login y el validar

se necesita darle estilo al inicio de sesión y registro
-->
</body>
</html>