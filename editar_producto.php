<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    
<?php 
  include('nav.php');
  include('clases/Producto.php');
  $producto=new Producto();
  $fk=$_GET['pk'];

  $res=$producto->buscar($fk);
  $datos=mysqli_fetch_assoc($res);

  include('clases/Categorias.php');
  $categorias=new Categorias();
  $respuesta=$categorias->mostrarCategorias();

?>
  <form class="" action="formularios/actualizar_producto.php" method="POST" enctype="multipart/form-data">
 
        <h2>Actualizar Producto</h2>
        <label>Nombre del Producto:</label> <br>
        <input type="hidden" name="pk" value="<?=$datos['pk_producto']; ?>">

        <input value="<?=$datos['nom_prod']?>" class="controls" type="text" name="producto" required> <br>

        <label>Descripción:</label> <br>
        <input value="<?=$datos['descripcion']?>" class="controls" type="text" name="descripcion" required> <br>

        <label>Precio:</label> <br>
        <input value="<?=$datos['precio']?>" class="controls" type="number" name="precio"> <br>

        <label>Categoría:</label> <br>
        <select name="pk_categoria" required> 
            <option value="">Seleccione una categoría</option>
            <?php while($fila=mysqli_fetch_array($respuesta)){
                if($fila['estatus']==1){
                    echo "<option value='".$fila['pk_categoria']."'>".$fila['nom_categoria']."</option>";
                }
              }
            ?>
        </select> <br>

        <label>Foto:</label> <br>
        <input value="" class="controls" type="file" name="foto"> <br>
        <input type="text" value="<?=$datos['foto']?>" name="foto_ante">

        <input class="btn" type="submit" value="Guardar">

  
    </form>

</body>
</html>