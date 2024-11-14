<?php
    include('clases/Producto.php');
    include('nav.php');
    $producto=new Producto();

    //Recibo el id que le envié desde el index.
    $pkproducto=$_GET['pkproducto'];

    //mando el id a una función para que me arroje los datos de ese producto en específico.
    $datos=mysqli_fetch_assoc($producto->mostrarPorId($pkproducto));
?>

<script src="js/jquery.js">

</script>

<style>
    .cuadro{
        display: inline-block;
        width: 40%;
        padding: 30px
    }
</style>
<div>
    <div class="cuadro">
        <img src="images/<?=$datos['foto']?>">
    </div>
    <div class="cuadro">
        <h2><?=$datos['nom_prod']?></h2>
        <h4><?=$datos['precio']."$"?></h4>
        <h5><?=$datos['descripcion']?></h5>

        <form action="" method="POST">
            <input type="hidden" name="fkproducto" value="<?=$datos["pk_producto"]?>">
            <input type="number" name="cantidad" value="1">
            
            <input type="submit" value="Agregar al carrito">
        </form>
        <div id="respuesta"> </div>
    </div>
</div>
