<?php
include('../clases/Direccion.php');
$direccion=new Direccion();


session_start();
$fkusuario=$_SESSION['pk_usuario'];
$calle=$_POST['calle'];
$colonia=$_POST['colonia'];
$ciudad=$_POST['ciudad'];
$referencia=$_POST['referencia'];
$num_ext=$_POST['num_ext'];


$resultado=$direccion->insertarDireccion($calle, $numExt, $referencia, $colonia, $ciudad, $fkusuario);

if($resultado){
    echo "<script>
    alert('Direccion agregada con exito');
    location.href='../direccion.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../agregar_direccion.php'
    </script>";
}
?>