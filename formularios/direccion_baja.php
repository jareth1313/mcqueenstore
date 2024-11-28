<?php
include('../clases/Direccion.php');
$direccion=new Direccion();

$pk_direccion=$_GET['pk_direccion'];

$resultado=$direccion->DireccionBaja($pk_direccion);

if($resultado){
	echo "<script> alert('Dirección eliminada con exito');
    location.href='../direccion.php';</script>";
}else{
	echo "Error";
}

?>