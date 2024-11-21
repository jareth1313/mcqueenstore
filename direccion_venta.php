<?php
include('nav.php');
include('clases/Direccion.php');
$direccion=new Direccion();

$pkventa=$_POST['venta'];
$fk_usuario=$_SESSION['pk_usuario'];

$dato=$direccion->mostrarDireccion($fk_usuario);

if(mysqli_num_rows($dato)!=0):
    $consulta="Seleccione una direccion";
else:
    $consulta="Sin dirección registrada";
endif;
?>

<h2>Dirección</h2>

<a href="agregar_direccion.php">Agregar Dirección</a> <br><br>

<form action="metodoPago.php" method="POST">
    <select name="pk_direccion" required> 
        <option value=""><?=$consulta?></option>
        <?php while ($fila=mysqli_fetch_assoc($dato)){
        echo "<option value='".$fila['pk_direccion_usu']."'>"."Calle:".$fila['calle']." Colonia:".$fila['colonia']."</option>";  
        }
        ?>    
    </select> 

    <input type="submit" value="Continuar Compra">
</form>


