<?php
class Met_pago
{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function mostrarTodo(){
        $consulta="SELECT * FROM met_pago";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

}
?>