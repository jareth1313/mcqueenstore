<?php
include("../clases/Producto.php");

$producto=new Producto();

$pk=$_GET['pk'];

$resp=$producto->eliminarProducto($pk);
if($resp){
    echo "<script> alert('Producto eliminado con exito');
    location.href='../index.php';</script>"; 
}
else{
    echo 'Hubo un error';
}
?>