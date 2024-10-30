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

    function buscar($pk_producto){
        $consulta="SELECT * FROM producto WHERE pk_producto='{$pk_producto}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizar($pk_prod, $nom_prod, $descripcion, $precio, $tipo, $foto){
        $consulta="UPDATE producto SET nom_prod='{$nom_prod}', descripcion='{$descripcion}', precio='{$precio}', tipo='{$tipo}', foto='{$foto}' WHERE pk_producto='{$pk_prod}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }




}

?>