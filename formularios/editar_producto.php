<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Platillo</title>
</head>
<body>
    
<?php 
  include('../clases/Producto.php');
  $producto=new Producto();
  $fk=$_GET['pk'];

  $res=$producto->buscar($fk);
  $datos=mysqli_fetch_assoc($res);

?>
  <form class="registro" action="actualizar_producto.php" method="POST" enctype="multipart/form-data">
 
        <h2>Actualizar Producto</h2>
        <label>Nombre del Producto:</label> <br>
        <input type="hidden" name="pk" value="<?=$datos['pk_producto']; ?>">

        <input value="<?=$datos['nom_prod']?>" class="controls" type="text" name="producto" required> <br>

        <label>Descripción:</label> <br>
        <input value="<?=$datos['descripcion']?>" class="controls" type="text" name="descripcion" required> <br>

        <label>Precio:</label> <br>
        <input value="<?=$datos['precio']?>" class="controls" type="text" name="precio"> <br>

        <label>Tipo:</label> <br>
        <input value="<?=$datos['tipo']?>" class="controls" type="text" name="tipo" required> <br>

        <label>Foto:</label> <br>
        <input value="<?=$datos['foto']?>" class="controls" type="file" name="foto"> <br>

        <input class="btn" type="submit" value="Guardar">

  
    </form>

</body>
</html>