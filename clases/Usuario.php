<?php
class Usuario{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }
    
    function insertar($nom_usu, $ap_usu, $am_usu, $correo, $passwrd,$tipo){
        $consulta="INSERT INTO usuario(pk_usuario, nom_usu, ap_usu, am_usu, correo, passwrd, tipo, estatus) VALUES (NULL, '{$nom_usu}', '{$ap_usu}', '{$am_usu}', '{$correo}', '{$passwrd}', '{$tipo}', 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function validar($nom_usu,$correo,$passwrd){
        $consulta="SELECT * FROM usuario WHERE nom_usu='{$nom_usu}' AND correo='{$correo}' AND passwrd='{$passwrd}' AND estatus=1";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }
}

# Necesita modificar los nombres de los campos de la base de datos
?>

