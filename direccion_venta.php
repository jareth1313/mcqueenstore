<?php
include('nav.php');
include('clases/Direccion.php');
$direccion=new Direccion();

$pkventa=$_POST['venta'];
$fk_usuario=$_SESSION['pk_usuario'];

$fila=mysqli_fetch_assoc($direccion->mostrarDireccion($fk_usuario));

?>

<h2>Dirección</h2>

<a href="agregar_direccion.php">Agregar Dirección</a>

<select name="pk_direccion" required> 
    <option value="">Seleccione una direccion</option>
    <?php
        echo "<option value='".$fila['pk_direccion_usu']."'>"."Calle:".$fila['calle']." Colonia:".$fila['colonia']."</option>";
    
?>    
</select> 


