<?php
include('../clases/Categorias.php');
$categoria=new Categorias();

$fk=$_GET['pk'];

$resultado=$categoria->eliminarcategoria($fk);

if($resultado){
	echo "<script> alert('Categoria eliminada con exito');
    location.href='../categorias.php';</script>";
}else{
	echo "Error";
}

?>