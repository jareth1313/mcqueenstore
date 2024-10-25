<?php

class Producto
{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertar($producto, $descripcion, $precio, $tipo, $foto){
        $consulta="INSERT INTO producto (pk_producto, nom_prod, descripcion, precio, tipo, foto, estatus)
        VALUES (NULL, '{$producto}', '{$descripcion}', '{$precio}', '{$tipo}', '{$foto}', 1)";
        $respuesta=$this->conexion->query($consulta);
        return $this->conexion->insert_id; 
    }

    function mostrarTodo(){
        $consulta="SELECT * FROM producto WHERE estatus=1";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function eliminarProducto($pk){
        $sql="DELETE FROM producto WHERE pk_producto='{$pk}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }




}

?>