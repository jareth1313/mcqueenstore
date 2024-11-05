<?php
    include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login McQueen Store</title>
</head>
<body>
    
    <form action="validar.php" method="POST">
        <h2>Iniciar sesión</h2>
        <br>
        <label>Correo</label>  <br>
        <input type="email" name="correo" required> <br>
        <label>Contraseña</label> <br>
        <input type="password" name="pass" required> <br>
        <br>
        <input type="submit" value="Iniciar sesión">
        
        <br>
        <br>
        <label>¿Eres nuevo? Registrate ahora:</label> <br>
        <a href="formularios/formulario_usuario.php">
            <input type="button" value="Iniciar registro">
        </a>

    </form>

<!-- Se conecta de de Formulario Usuario > insertar usuario > Usuario > Login > validar desde conexión conecta con la base de datos para insertar y consultar, pero tambien se tiene que hacer el registro con formulario usuario e insertar usuario, que es lo previo al login, primero te registras, luego inicias sesión
 
el formulario cumple la función de ser la parte visual del registro al igual que el login y el validar

se necesita darle estilo al inicio de sesión y registro
-->
</body>
</html>