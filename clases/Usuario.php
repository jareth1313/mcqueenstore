<?php
class Usuario{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }
    
    function insertar($nom_usu, $ap_usu, $am_usu, $correo, $passwrd,$tipo_usu){
        $consulta="INSERT INTO usuario(pk_usuario, nom_usu, ap_usu, am_usu, correo, passwrd, tipo_usu, estatus) VALUES (NULL, '{$nom_usu}', '{$ap_usu}', '{$am_usu}', '{$correo}', '{$passwrd}', '{$tipo_usu}', 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }
    
    function insertarAdmin($nom_usu, $ap_usu, $am_usu, $correo, $passwrd){
        $consulta="INSERT INTO usuario(pk_usuario, nom_usu, ap_usu, am_usu, correo, passwrd, tipo_usu, estatus) VALUES (NULL, '{$nom_usu}', '{$ap_usu}', '{$am_usu}', '{$correo}', '{$passwrd}', 1, 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }



    function mostrarAdmins(){
        $sql="SELECT * FROM usuario WHERE tipo_usu=1";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function editarAdmin($pkadmin, $nombre_admin, $apaterno_usu, $correo_admin, $estatus){
        $sql="UPDATE usuario SET nom_usu='{$nombre_admin}' , ap_usu='{$apaterno_usu}',
        correo='{$correo_admin}' WHERE pk_usuario='{$pkadmin}'";
         $respuesta=$this->conexion->query($sql);
         return $respuesta;
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

    function editarInfo($pkusuario,$nombre_usu, $apaterno_usu, $amaterno_usu, $correo, $contra ){
        $sql="UPDATE usuario SET nom_usu='{$nombre_usu}' , ap_usu='{$apaterno_usu}' , am_usu='{$amaterno_usu}' , correo='{$correo}',
         passwrd='{$contra}'WHERE pk_usuario='{$pkusuario}'";
         $respuesta=$this->conexion->query($sql);
         return $respuesta;
    }
}
?>

