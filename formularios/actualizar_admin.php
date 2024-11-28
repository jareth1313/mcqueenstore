<?php
include('../clases/Usuario.php');

$usuario=new Usuario();

$pk_admin=$_POST['pk_admin'];
$nom_admin=$_POST["nombre_editar"];
$ap_admin=$_POST["apaterno_editar"];
$estatus=$_POST["estatus_editar"];
$correo_admin=$_POST["correo_editar"];

$resultado=$usuario->editarAdmin($pk_admin, $nom_admin, $ap_admin, $correo_admin, $estatus);

if($resultado){
	echo "<script> alert('Administrador editado con exito');
    location.href='../mostrar_admins.php';</script>";
}else{
	echo "Error";
}
?>