<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="css/editar_producto.css">
</head>

<?php
    include('nav.php');
    include('clases/Categorias.php');
    $cat = new Categorias();
    $categorias = $cat->mostrarCategorias();
?>

<body>
    <div class="container">
        <form class="product-form" action="formularios/agregar_producto.php" method="POST" enctype="multipart/form-data">
            <h2>Registrar Producto</h2>
            
            <label for="producto">Nombre del Producto:</label>
            <input id="producto" class="input-field" type="text" name="producto" required> <br>

            <label for="descripcion">Descripción:</label>
            <input id="descripcion" class="input-field" type="text" name="descripcion" required> <br>

            <label for="precio">Precio:</label>
            <input id="precio" class="input-field" type="number" name="precio" required> <br>

            <label for="categoria">Categoría:</label>
            <select id="categoria" class="dropdown" name="pk_categoria" required> 
                <option value="">Seleccione una categoría</option>
                <?php while ($fila = mysqli_fetch_array($categorias)) {
                    if ($fila['estatus'] == 1) {
                        echo "<option value='" . $fila['pk_categoria'] . "'>" . $fila['nom_categoria'] . "</option>";
                    }
                } ?>
            </select> <br>

            <label for="foto">Foto:</label>
            <input id="foto" class="input-field" type="file" name="foto" required> <br>
                  
            <input class="submit-btn" type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>
