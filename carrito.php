<?php
session_start();
    include('clases/Venta.php');

    $venta=new Venta();

    //Busco la venta, puse el 1 porque es el usuario con el id=1
    //pero debería ser el id del usuario logueado. El 0 es el estatus, ya que busco las
    //ventas que son de carrito (estatus 0).
    $datos=$venta->mostrarVenta($_SESSION['pk_usuario'],0);
?>

<h2>Carrito de compras</h2>
<table>
    <tr>
        <!--colspan define el número de columnas combinadas -->
        <th colspan="2">Producto</th>
        <th>Cantidad</th>
        <th>Importe</th>
    </tr>

    <?php
    $total=0;
        foreach($datos as $fila){
            $total+=$fila['subtotal'];
    ?>

    <tr>
        <td></td>
        <td><?php echo $fila['nom_prod']?></td>
        <td><?=$fila['cantidad']?></td>
        <td><?=$fila['subtotal']?></td> 
    </tr>
    <?php
        }
    ?>
    <tr>
        <th colspan="3">Total:</th>
        <th><?=$total?></th>
    </tr>

</table>