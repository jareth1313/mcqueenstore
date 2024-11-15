

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>

<body>

    <?php 
    include('nav.php');
    include('clases/Usuario.php');
    $usu=new Usuario();

    if(isset($_SESSION['pk_usuario'])){
        $respuesta=$usu->buscar($_SESSION['pk_usuario']);
        ?>
    <div class="conteusu">

        <div class="conte">
            <div class="mostrar-usu">
                <?php
                while($row=mysqli_fetch_assoc($respuesta)){
                    ?>
                <div class="x">
                    <a class="btn" href="usuario.php">Información Personal</a>
                    <a class="btn" href="direccion.php">Dirección</a>
                    <a class="btn" href="historial.php">Historial de Compras</a>
                </div>

                <div class="xx">
                    <a class="btn" href="editar_info.php">Editar Información</a>

                    <label>Nombre:</label> <br>
                    <input value="<?=$row['nom_usu']?>" readonly class="controls" type="text" name="nombres" required> <br>

                    <label>Apellido Paterno:</label> <br>
                    <input value="<?=$row['ap_usu']?>" readonly class="controls" type="text" name="apaterno" required> <br>

                    <label>Apellido Materno:</label> <br>
                    <input value="<?=$row['am_usu']?>" readonly class="controls" type="text" name="amaterno"> <br> 

                    <label>Email:</label> <br>
                    <input value="<?=$row['correo']?>" readonly class="controls" type="text" name="amaterno"> <br> 
                </div> 

                <div class="conte-link">
                <a class="btnn" href="cerrar_sesion.php">Cerrar Sesión</a>
                </div>
                <?php
                }} else{
                    echo "<script>
                    location.href='login.php'
                    </script>";
                };
                ?>
            </div>
        </div>
    </div>

</body>
</html>