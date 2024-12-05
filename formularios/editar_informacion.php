<?php
include('../clases/Usuario.php');
$usuario=new Usuario();

// obtener los datos
$pkusu=$_POST['pk_usu'];
$nom_usu=$_POST["nombre_editar"];
$ap_usu=$_POST["apaterno_editar"];
$am_usu=$_POST["amaterno_editar"];
$correo=$_POST["correo_editar"];
$contra=$_POST['contra_editar'];

$resultado=$usuario->editarInfo($pkusu,$nom_usu, $ap_usu, $am_usu, $correo, $contra );

if($resultado){
    echo "<script>
    alert('Usuario Editado con exito');
    location.href='../usuario.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../editar_info.php'
    </script>";
}


?>