<?php
include('../clases/Usuario.php');
$usuario=new Usuario();

// obtener los datos
$nom_usu=$_POST["username_admin"];
$ap_usu=$_POST["apellido_paterno_admin"];
$am_usu=$_POST["apellido_materno_admin"];
$correo=$_POST["correo_admin"];
$passwrd=$_POST["pass_admin"];

$resultado=$usuario->insertarAdmin($nom_usu, $ap_usu, $am_usu, $correo, $passwrd);

if($resultado){
    echo "<script>
    alert('Usuario Administrador creado con exito');
    location.href='../index.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../formulario_usuario.php'
    </script>";
}

?>