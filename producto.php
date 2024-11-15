<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>

<?php
    include('nav.php');
    include('clases/Categorias.php');
    $cat=new Categorias();

    $categorias=$cat->mostrarCategorias();
?>


<!-- hola -->
<body>
    <form class="" action="formularios/agregar_producto.php" method="POST" enctype="multipart/form-data">
        <h2>Registrar Producto</h2>
        <label>Nombre del Producto:</label> <br>
        <input class="" type="text" name="producto" required> <br>

        <label>Descripción:</label> <br>
        <input class="" type="text" name="descripcion" required> <br>

        <label>Precio:</label> <br>
        <input class="" type="number" name="precio" required> <br><br>

        <select name="pk_categoria" required> 
            <option value="">Seleccione una categoría</option>
            <?php while($fila=mysqli_fetch_array($categorias)){
                if($fila['estatus']==1){
                    echo "<option value='".$fila['pk_categoria']."'>".$fila['nom_categoria']."</option>";
                }
              }
            ?>
        </select> <br><br>

        <label>Foto:</label> <br>
        <input class="" type="file" name="foto" required> <br>
              
        <input class="btn" type="submit" value="Guardar">
    </form>

</body>
</html>