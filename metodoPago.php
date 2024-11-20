<?php
include('nav.php');
include('clases/Met_pago.php');

$metodoPago=new Met_pago();

// $fk_direccion=$_POST['pk_direccion'];

$dato=$metodoPago->mostrarTodo();

?>

<h2>Método de Pago</h2>

<a href="agregar_metodopago.php">Agregar Método de Pago</a> <br><br>

<form action="formularios/realizar_compra.php" method="POST">
    <select name="pk_metpago" required> 
        <option value="">Seleccione un metodo de pago</option>
        <?php while($fila=mysqli_fetch_assoc($dato)){
        echo "<option value='".$fila['pk_met_pago']."'>"."Nombre:".$fila['nom_met_pago']."</option>";  
        }
        ?>    
    </select> 

    <input type="submit" value="Continuar Compra">
</form>


