<?php
include('clases/Usuario.php');
$usuario=New Usuario;

# inicia sesión con el correo y la contraseña
$correo=$_POST["correo"];
$passwrd=$_POST["pass"];

$resultado=$usuario->validar($nom_usu,$correo,$passwrd);
$num_rows=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($num_rows<=0){
    echo "No existe";
}else{
    echo "Existe";
    # con esto inicia una sesión
    session_start();
    # creamos variables de sesión, solo funcionarán mientras una sesión esté activa
    $_SESSION['pk_usuario']=$datos['pk_usuario'];
    $_SESSION['tipo']=$datos['tipo'];
    $_SESSION['username']=$nom_usu;

    if($_SESSION['tipo']==1){
        echo "<script>
            alert('Bienvenido! Eres un administrador.');
            location.href='index.php'
        </script>";    
    }else{
        echo "<script>
            alert('Bienvenido.');
            location.href='index.php'
        </script>";
    }

}

?>