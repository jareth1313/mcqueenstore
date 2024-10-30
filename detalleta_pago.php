<?php 

include('clases/DetallePago.php'); 
$detallePago = new DetallePago();

$idpago = $_GET['pago'];

$datos = mysqli_fetch_assoc($detallePago->mostrarPorId($idpago));
?>
<script src="js/jquery.js" type="text/javascript"></script>

<div>
    <div class="cuadro">
        <h2> Detalle del Pago </h2>
        <p> Pedido ID: <?= $datos['fk_pedido'] ?> </p>
        <p> Método de Pago: <?= $datos['met_pago'] ?> </p>
        <p> Monto: <?= $datos['monto'] ?> </p>
        <p> Fecha de Pago: <?= $datos['fecha_pago'] ?> </p>
        <p> Estado: <?= $datos['estado'] ?> </p>
        <p> Usuario ID: <?= $datos['fk_usuario'] ?> </p>
        <p> Referencia: <?= $datos['referencia'] ?> </p>
        <p> Detalles: <?= $datos['detalles'] ?> </p>
    </div>

    <div class="cuadro">
    <form action="controladores/actualizar_estado_pago.php" method="POST">
        <input type="hidden" name="idpago" value="<?= $idpago ?>">
        <select name="estado">
            <option value="Pendiente">Pendiente</option>
            <option value="Completado">Completado</option>
            <option value="Fallido">Fallido</option>
            <option value="Reembolsado">Reembolsado</option>
        </select>
        <input type="submit" value="Actualizar Estado">
    </form>
</div>

</script>



