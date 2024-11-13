<?php
    include('clases/Producto.php');
    include('nav.php');
    $producto=new Producto();

    //Recibo el id que le envié desde el index.
    $idproducto=$_GET['pkproducto'];

    //mando el id a una función para que me arroje los datos de ese producto en específico.
    $datos=mysqli_fetch_assoc($producto->mostrarPorId($idproducto));
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
        <p><?=$datos['descripcion']?></p>

        <form id="formulario" method="POST">
            <input type="hidden" name="fkproducto" value="<?=$datos["pk_producto"]?>">
            <input type="number" name="cantidad" value="1">
            
            <input type="submit" value="Agregar al carrito">
        </form>
        <div id="respuesta"> </div>
    </div>
</div>

<!-- <script>
    //Utilizando jquery
    //Este fracmento de código hará que se agregue un producto al carrito sin que se 
    //refresque o redirecciones a otra página, haciendo que no se pierdan los datos agregados. 
    $('#formulario').on('submit', function(e){
        e.preventDefault()
            $.ajax({
                type: 'POST',
                url: 'controladores/agregar_carrito.php',
                data: $('#formulario').serialize(),
                dataType: 'html',
                error: function(){
                    alert('error');
                }, success: function(resultado){
                    $("#respuesta").html(resultado);
                }
            })
    })
</script> -->