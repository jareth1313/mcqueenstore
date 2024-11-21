<?php
session_start();
include('../clases/Venta.php');
$venta= new Venta();

$pkpago=$_POST['pk_metpago'];

$resultado=$venta->realizarCompra($_SESSION['fkventa'], $pkpago, $_SESSION['fk_direccion'], $_SESSION['total']);

if($resultado){
    echo "<script>
    alert('Venta realizada con exito');
    location.href='../index.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../index.php'
    </script>";
}

?>