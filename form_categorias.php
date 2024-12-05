<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Categoría</title>
   
    <link rel="stylesheet" href="css/insertar_categoria.css">
</head>
<body>

<?php 
  include('nav.php');
?>

<div class="container">
    <form class="category-form" action="formularios/insertar_categ.php" method="POST">
        <h2>Agregar Categoría</h2>
        <label for="nom_categoria">Nombre de la categoría:</label>
        <input class="input-field" type="text" id="nom_categoria" name="nom_categoria" required> <br>

        <input class="submit-btn" type="submit" value="Guardar">
    </form>
</div>

</body>
</html>
