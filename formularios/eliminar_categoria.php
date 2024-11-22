<?php
include('../clases/Categorias.php');
$categoria=new Categorias();

$fk_cat=$_GET['pk_categori'];

$resultado=$categoria->eliminarcategoria($fk_cat);

if($resultado){
	echo "<script> alert('Categoria eliminada con exito');
    location.href='../categorias.php';</script>";
}else{
	echo "Error";
}

?>