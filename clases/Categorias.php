<?php

class Categorias
{
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertarCat($nom_cat){
    $sql="INSERT INTO categoria(pk_categoria, nom_categoria, estatus)
    VALUES (NULL, '{$nom_cat}', 1)";
    $respuesta=$this->conexion->query($sql);
    return $this->conexion->insert_id; 
    }

    function mostrarCategorias(){
        $sql="SELECT * FROM categoria";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function eliminarcategoria($pk_categoria){
        $sql="DELETE FROM categoria WHERE pk_categoria= '{$pk_categoria}' ";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function actualizarCat($pk_categoria, $nom_cat, $estatus){
        $sql="UPDATE categoria SET nom_categoria='{$nom_cat}', estatus='{$estatus}' WHERE pk_categoria='{$pk_categoria}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function buscarCat($pk_categoria){
        $sql="SELECT * FROM categoria WHERE pk_categoria='{$pk_categoria}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
}
?>