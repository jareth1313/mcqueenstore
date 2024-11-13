<?php
include('../clases/Categorias.php');
$categoria=new Categorias();

$fk=$_POST['pk'];
$nombrecat=$_POST['nombrecategoria'];
$estatus=$_POST['estatuscategoria'];

$resultado=$categoria->actualizarCat($fk, $nombrecat, $estatus);

if($resultado){
	echo "<script> alert('Categoria editada con exito');
    location.href='../categorias.php';</script>";
}else{
	echo "Error";
}





?>