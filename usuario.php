

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/formulario.css?d=1">
    

</head>

<body>

    <?php 
    include('nav.php');
    include('clases/Usuario.php');
    $usu=new Usuario();

    if(isset($_SESSION['pk_usuario'])){
        $respuesta=$usu->buscar($_SESSION['pk_usuario']);
        ?>
    <div class="conteusu" >

        <div class="conte" id="contUsuario">
            <div class="mostrar-usu" id="opciones">
                <?php
                while($row=mysqli_fetch_assoc($respuesta)){
                    ?>
                <div class="x">
                    <?php
                    echo '<a href="editar_info.php?pk_usuario='.$row['pk_usuario'].'" class="btn">Editar Información</a>'
                    ?>
                    <a class="btn" href="direccion.php">Dirección</a>
                    <a class="btn" href="historial.php">Historial de Compras</a>
                </div>

                    <label>Nombres:</label>
                    <input class="form-control" type="text" value="<?=$row['nom_usu']?>" disabled readonly name="nombres" required readonly class="controls"> <br>
                    <label>Apellido Paterno:</label>
                    <input class="form-control" type="text" value="<?=$row['ap_usu']?>" disabled readonly name="apaterno" required readonly class="controls"> <br>
                    <label>Apellido Materno:</label>
                    <input class="form-control" type="text" value="<?=$row['am_usu']?>" disabled readonly name="amaterno" required readonly class="controls"> <br>
                    <label>Email:</label>
                    <input class="form-control" type="text" value="<?=$row['correo']?>" disabled readonly name="amaterno" required readonly class="controls"> <br>
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