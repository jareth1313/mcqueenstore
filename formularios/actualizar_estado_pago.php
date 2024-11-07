<?php
include('../clases/DetallePago.php'); 

$detallePago = new DetallePago();


$idpago = $_POST['idpago'];
$estado = $_POST['estado'];

if ($detallePago->actualizarEstado($idpago, $estado)) {
    $mensaje = "Estado actualizado a $estado.";
} else {
    $mensaje = "Error al actualizar el estado.";
}


header("Location: ../detalle_pago.php?pago=$idpago&mensaje=" . urlencode($mensaje));
exit;
?>
