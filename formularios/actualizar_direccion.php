<?php
include('../clases/Direccion.php');

$direccion=new Direccion();

$pk_direccion=$_POST['pk_direccion'];
$calle=$_POST["calle_editar"];
$colonia=$_POST["colonia_editar"];
$ciudad=$_POST['ciudad_editar'];
$referencia=$_POST["referencia_editar"];
$num_ext=$_POST["num_ext_editar"];

$resultado=$direccion->EditarDireccion($pk_direccion, $calle, $num_ext, $referencia, $colonia, $ciudad);

if($resultado){
	echo "<script> alert('Direccion editada con exito');
    location.href='../direccion.php';</script>";
}else{
	echo "Error";
}
?>