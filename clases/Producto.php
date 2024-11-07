<?php

class Producto
{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertar($producto, $descripcion, $precio, $foto, $fk_cate){
        $consulta="INSERT INTO producto (pk_producto, nom_prod, descripcion, precio, foto, estatus, fk_categoria)
        VALUES (NULL, '{$producto}', '{$descripcion}', '{$precio}', '{$foto}', 1, '{$fk_cate}')";
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
        $consulta="SELECT * FROM producto p INNER JOIN categoria c ON p.fk_categoria=c.pk_categoria WHERE pk_producto='{$pk_producto}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizar($pk_prod, $nom_prod, $descripcion, $precio, $foto, $fk_cat){
        $consulta="UPDATE producto SET nom_prod='{$nom_prod}', descripcion='{$descripcion}', precio='{$precio}', foto='{$foto}', fk_categoria='{$fk_cat}' WHERE pk_producto='{$pk_prod}'";
        $respuesta=$this->conexion->query($consulta);
        return $respuesta;
    }




}

?>