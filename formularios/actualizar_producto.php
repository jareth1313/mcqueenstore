<?php 
require_once('../clases/Producto.php');
$prod=new Producto();

$pk_prod=$_POST['pk'];

$producto=$_POST['producto'];
$descrip=$_POST['descripcion'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];

//obtengo el archivo y el nombre
$archivo=$_FILES['foto']['tmp_name'];
$nombre_archivo=$_FILES['foto']['name'];
//lo paso a la carpeta donde quiero que se guarde (en mi proyecto)
move_uploaded_file($archivo, '../images/'.$nombre_archivo);

$respuesta=$prod->actualizar($pk_prod, $producto, $descrip, $precio, $tipo, $nombre_archivo);

if($respuesta){
	echo "<script> alert('Producto editado con exito');
    location.href='../index.php';</script>";
}else{
	echo "Error";
}

 ?>