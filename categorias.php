<a href="formularios/form_categorias.php">Agregar Categorías</a>

<?php
    include('nav.php');
    include('clases/Categorias.php');

    $cat=new Categorias();

    $datos=$cat->mostrarCategorias();
?>

<h2>Categorias:</h2>
<table>
    <tr>
        <!--colspan define el número de columnas combinadas -->
        <th colspan="2">Nombre</th>
        <th>estatus</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($datos)){
    ?>
    <tr>
        <td><?php echo $row['nom_categoria']?></td>
        <td><?=$row['estatus']?></td>
    </tr>
    <?php
    }
    ?>


</table>