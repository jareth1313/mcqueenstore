<?php
class Met_pago
{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }
}
?>