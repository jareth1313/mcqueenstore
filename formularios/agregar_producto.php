<?php
include('../clases/Producto.php');

$producto=new Producto();

$prod=$_POST["producto"];
$descrip=$_POST["descripcion"];
$precio=$_POST["precio"];
$fk_cat=$_POST["pk_categoria"];

//obtengo el archivo y el nombre de la foto
$archivo=$_FILES['foto']['tmp_name'];
$nombre_archivo=$_FILES['foto']['name'];

move_uploaded_file($archivo, '../images/'.$nombre_archivo);

$respuesta=$producto->insertar($prod, $descrip, $precio, $nombre_archivo, $fk_cat);
if($respuesta){
    echo "<script> alert('Producto Agregado con Exito');
    location.href='../index.php';</script>"; 
}
else{
    echo 'Hubo un error';
}

?>