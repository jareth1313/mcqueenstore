<?php
include("../clases/Categorias.php");
$categoria = new Categorias();

$nom_cat=$_POST["nom_categoria"];

$resultado=$categoria->insertarCat($nom_cat);

if($resultado){
    echo "<script>
    alert('Categoría agregada con exito');
    location.href='../categorias.php'
    </script>";
}else{
    echo "<script>
    alert('Ocurrio un error');
    location.href='form_categorias.php'
    </script>";
}

?>