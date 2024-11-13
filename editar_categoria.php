<?php 
  include('nav.php');
  include('clases/Categorias.php');
  $categoria=new Categorias();
  $fk=$_GET['pk'];

  $respuesta=$categoria->buscarCat($fk);
  $datos=mysqli_fetch_assoc($respuesta);

?>
  <form class="" action="formularios/actualizar_categoria.php" method="POST">
 
        <h2>Actualizar Producto</h2>
        <label>Nombre de la categoria:</label> <br>
        <input type="hidden" name="pk" value="<?=$datos['pk_categoria']; ?>">

        <input value="<?=$datos['nom_categoria']?>" class="controls" type="text" name="nombrecategoria" required> <br>

        <label>Estatus:</label> <br>
        <input value="<?=$datos['estatus']?>" class="controls" type="text" name="estatuscategoria" required> <br>

        <input class="btn" type="submit" value="Guardar">

    </form>