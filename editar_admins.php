<?php
include('nav.php');
include('clases/Usuario.php');
$usuario=new Usuario();

$pkadmin=$_GET['pk_admin'];

$respuesta=$usuario->buscar($pkadmin);

?>

<div class="register-container">
    <?php
        while($row=mysqli_fetch_assoc($respuesta)){
    ?>

    <form action="formularios/actualizar_admin.php" method="POST">
    <h1>Editar Información</h1>
    <input value="<?=$row['pk_usuario']?>"   type="hidden" name="pk_admin">

    <label>Nombre:</label>
    <input value="<?=$row['nom_usu']?>"   type="text" name="nombre_editar" required> <br>

    <label>Apellido Paterno:</label>
    <input value="<?=$row['ap_usu']?>"  type="text" name="apaterno_editar" required> <br>

    <label>Correo:</label>
    <input value="<?=$row['correo']?>"  type="email" name="correo_editar" required> <br> 

    <label>Estatus:</label>
    <input value="<?=$row['estatus']?>"  type="text" name="estatus_editar" required>


    <input class="btn" type="submit" value="Guardar">
    </form> 

                
    <?php
    } 
    ?>
 </div>
