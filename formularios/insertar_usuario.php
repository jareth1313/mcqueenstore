<?php
include('../clases/Usuario.php');
$usuario=new Usuario();

// obtener los datos
$nom_usu=$_POST["username"];
$ap_usu=$_POST["apellido_paterno"];
$am_usu=$_POST["apellido_materno"];
$correo=$_POST["correo"];
$passwrd=$_POST["pass"];

// envía los datos y el nombre del archivo
$resultado=$usuario->insertar($nom_usu, $ap_usu, $am_usu, $correo, $passwrd, 0);

if($resultado){
    echo "<script>
    alert('Usuario creado con exito');
    location.href='../login.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='../formulario_usuario.php'
    </script>";
}


?>