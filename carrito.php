<?php
    include('nav.php');
    include('clases/Venta.php');
    $venta=new Venta();

    if(isset($_SESSION['pk_usuario'])){
        $datos=$venta->mostrarVenta($_SESSION['pk_usuario'],0);
?>

<h2>Carrito de compras</h2>
<link rel="stylesheet" href="estilos.css">
<table>
    <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Importe</th>
    </tr>

    <?php
    $total=0;
    foreach($datos as $fila){
      $total+=$fila['subtotal'];
      ?>

    <tr>
        <td><?php echo $fila['nom_prod']?></td>
        <td><?=$fila['cantidad']?></td>
        <td><?=$fila['subtotal']."$"?></td> 
        <td>
            <?php echo '<a href="formularios/eliminar_carrito.php?pk_detalleventa='.$fila['pk_detalle_venta'].'" title="Eliminar del Carrito">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg></a> '  ?>
        </td>
    </tr>
    <?php
        }
    ?>
    <tr>
         <!--colspan define el número de columnas combinadas -->
        <th colspan="2">Total:</th>
        <th><?=$total."$"?></th>
    </tr>

</table>

<form action="direccion_venta.php" method="POST">
    <input type="hidden" name="venta">
    <input type="submit" value="Comprar">
</form>

<?php
    }
else
echo "<script> alert('Inicie sesión');
location.href='login.php' </script>";
?>
