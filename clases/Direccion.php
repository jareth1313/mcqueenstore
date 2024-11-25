<?php
class Direccion{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertarDireccion($calle, $num_ext, $referencia, $colonia, $fkusuario){
        $sql="INSERT INTO direccion_usu VALUES(NULL, $calle, $num_ext, $referencia, $colonia, $fkusuario, 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }

    function mostrarDireccion($fkusuario){
        $sql="SELECT * FROM direccion_usu WHERE fk_usuario='{$fkusuario}' AND estatus=1";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
}
?>