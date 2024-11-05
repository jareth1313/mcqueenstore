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
}

?>