<?php
include('clases/Usuario.php');
$usuario=New Usuario;

# inicia sesión con el correo y la contraseña
$correo=$_POST["correo"];
$passwrd=$_POST["pass"];

$resultado=$usuario->validar($correo,$passwrd);
$num_rows=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($num_rows<=0){
    echo "<script>
            alert('Correo o contraseña incorrecta.');
            location.href='login.php'
        </script>"; 
}else{
    # con esto inicia una sesión
    session_start();
    # creamos variables de sesión, solo funcionarán mientras una sesión esté activa
    $_SESSION['pk_usuario']=$datos['pk_usuario'];
    $_SESSION['tipousu']=$datos['tipo_usu'];
    $_SESSION['username']=$datos['nom_usu'];

    if($_SESSION['tipousu']==1){
        echo "<script>
        // cambiar el alert con el jquery y que se quite automaticamente luego de 4segundos
            alert('Bienvenido {$datos['nom_usu']}! Eres un administrador.');
            location.href='index.php'
        </script>";    
    }else{
        echo "<script>
            alert('Bienvenido {$datos['nom_usu']}.');
            location.href='index.php'
        </script>";
    }

}

?>