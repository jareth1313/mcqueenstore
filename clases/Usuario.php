<?php
class Usuario{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }
    
    function insertar($nom_usu, $ap_usu, $am_usu, $correo, $passwrd,$tipo){
        $consulta="INSERT INTO usuario(pk_usuario, nom_usu, ap_usu, am_usu, correo, passwrd, tipo_usu, estatus) VALUES (NULL, '{$nom_usu}', '{$ap_usu}', '{$am_usu}', '{$correo}', '{$passwrd}', '{$tipo}', 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function validar($correo,$passwrd){
        $consulta="SELECT * FROM usuario WHERE correo='{$correo}' AND passwrd='{$passwrd}' AND estatus=1";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    
    function buscar($pkusuario){
        $consulta="SELECT * FROM usuario where pk_usuario='{$pkusuario}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }
}

# Necesita modificar los nombres de los campos de la base de datos
?>

