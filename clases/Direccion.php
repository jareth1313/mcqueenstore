<?php
class Direccion{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertarDireccion($calle, $numExt, $referencia, $colonia, $ciudad, $fkusuario){
        $sql="INSERT INTO direccion_usu VALUES(NULL, '{$calle}', '{$numExt}', '{$referencia}', '{$colonia}', '{$ciudad}', '{$fkusuario}', 1)";
        $respuesta=$this->conexion->query($sql);
        return $this->conexion->insert_id;
    }

    function mostrarDireccion($fkusuario){
        $sql="SELECT * FROM direccion_usu WHERE fk_usuario='{$fkusuario}' AND estatus=1";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function BuscarDireccion($pk_direccion){
        $sql="SELECT * FROM direccion_usu WHERE pk_direccion_usu='{$pk_direccion}' AND estatus=1";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function EditarDireccion($pk_direccion, $calle, $num_ext, $referencia, $colonia, $ciudad){
        $sql="UPDATE direccion_usu SET calle='{$calle}', num_ext='{$num_ext}', referencia='{$referencia}', 
        colonia='{$colonia}', ciudad='{$ciudad}' WHERE pk_direccion_usu='{$pk_direccion}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function DireccionBaja($pk_direccion){
        $sql="UPDATE direccion_usu SET estatus=0 WHERE pk_direccion_usu='{$pk_direccion}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
}
?>