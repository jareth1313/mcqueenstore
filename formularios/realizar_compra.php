<?php
session_start();
include('../clases/Venta.php');
$venta= new Venta();

$pkpago=$_POST['pk_metpago'];

$contar=mysqli_fetch_assoc($venta->contar());
$numero=str_pad($contar['numero']+1,3,"0",STR_PAD_LEFT);
$folio="V-".$numero;

$resultado=$venta->realizarCompra($_SESSION['fkventa'], $folio, $pkpago, $_SESSION['fk_direccion'], $_SESSION['total']);

if($resultado){
    echo "<script>
    alert('Compra realizada con exito');
    location.href='../index.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../index.php'
    </script>";
}

?>