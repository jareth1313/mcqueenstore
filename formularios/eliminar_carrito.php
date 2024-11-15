<?php
include('../clases/Venta.php');
$venta=new Venta();

$fkdetalle_venta=$_GET['pk_detalleventa'];

$resultado=$venta->eliminarCarrito($fkdetalle_venta);

if($resultado){
	echo "<script> alert('Eliminado del carrito');
    location.href='../carrito.php';</script>";
}else{
	echo "Error";
}



?>