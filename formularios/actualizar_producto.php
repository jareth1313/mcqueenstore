<?php 
require_once('../clases/Producto.php');
$prod=new Producto();

$pk_prod=$_POST['pk'];

$producto=$_POST['producto'];
$descrip=$_POST['descripcion'];
$precio=$_POST['precio'];
$fk_categoria=$_POST['pk_categoria'];

$archivo=$_FILES['foto']['tmp_name'];
if($archivo){
	$nombre_archivo=$_FILES['foto']['name'];
	//lo paso a la carpeta donde quiero que se guarde (en mi proyecto)
	move_uploaded_file($archivo, '../images/'.$nombre_archivo);
}else{
	$nombre_archivo=$_POST["foto_ante"];
}
// //obtengo el archivo y el nombre

// 

$respuesta=$prod->actualizar($pk_prod, $producto, $descrip, $precio, $nombre_archivo, $fk_categoria);

if($respuesta){
	echo "<script> alert('Producto editado con exito');
    location.href='../index.php';</script>";
}else{
	echo "Error";
}

 ?>