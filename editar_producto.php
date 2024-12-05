<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/editar_producto.css">
</head>
<body>

<?php 
  include('nav.php');
  include('clases/Producto.php');
  
  $producto = new Producto();
  $fk = $_GET['pk'];

  $res = $producto->buscar($fk);
  $datos = mysqli_fetch_assoc($res);

  include('clases/Categorias.php');
  $categorias = new Categorias();
  $respuesta = $categorias->mostrarCategorias();
?>
<div class="container">
  <form class="product-form" action="formularios/actualizar_producto.php" method="POST" enctype="multipart/form-data">
    <h2>Actualizar Producto</h2>
    <label>Nombre del Producto:</label>
    <input type="hidden" name="pk" value="<?=$datos['pk_producto']; ?>">

    <input value="<?=$datos['nom_prod']?>" class="input-field" type="text" name="producto" required> <br>

    <label>Descripción:</label>
    <input value="<?=$datos['descripcion']?>" class="input-field" type="text" name="descripcion" required> <br>

    <label>Precio:</label>
    <input value="<?=$datos['precio']?>" class="input-field" type="number" name="precio"> <br>

    <label>Categoría:</label>
    <select name="pk_categoria" class="dropdown" required> 
        <option value="">Seleccione una categoría</option>
        <?php while($fila=mysqli_fetch_array($respuesta)) {
            if ($fila['estatus'] == 1) {
                echo "<option value='".$fila['pk_categoria']."'>".$fila['nom_categoria']."</option>";
            }
        }
        ?>
    </select> 
    <label>Foto:</label> 
    <input class="input-field" type="file" name="foto"> <br>
    <input type="text" value="<?=$datos['foto']?>" name="foto_ante" class="input-field">

    <input class="submit-btn" type="submit" value="Guardar">
  </form>
</div>
  
</body>
</html>



