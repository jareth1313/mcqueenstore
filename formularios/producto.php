<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>
<body>
    <form class="" action="agregar_producto.php" method="POST" enctype="multipart/form-data">
        <h2>Registrar Producto</h2>
        <label>Nombre del Producto:</label> <br>
        <input class="" type="text" name="producto" required> <br>

        <label>Descripción:</label> <br>
        <input class="" type="text" name="descripcion" required> <br>

        <label>Precio:</label> <br>
        <input class="" type="text" name="precio"> <br>

        <label>Tipo:</label> <br>
        <input class="" type="text" name="tipo" required> <br>

        <label>Foto:</label> <br>
        <input class="" type="file" name="foto" required> <br>

        <input class="btn" type="submit" value="Guardar">
    </form>

</body>
</html>