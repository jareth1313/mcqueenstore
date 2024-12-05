<?php
include('clases/Venta.php');
$venta=new Venta();
$pkventa=$_GET['pk_venta'];

$resultado=$venta->cambiarEstatus($pkventa);

if($resultado){
    echo "<script>
    location.href='historial_venta.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='historial_venta.php'
    </script>";
}



?>