<?php
include('nav.php');
include('clases/Direccion.php');

$direccion=new Direccion();

$pk_direccion=$_GET['pk_direccion'];

$respuesta=$direccion->BuscarDireccion($pk_direccion);
?>

<div class="conteusu" >

        <div class="conte" id="contUsuario">
            <div class="mostrar-usu" id="opciones">
                <?php
                while($row=mysqli_fetch_assoc($respuesta)){
                ?>
                <form action="formularios/actualizar_direccion.php" method="POST">
                    <h1>Editar Direccion</h1>
                    <input value="<?=$row['pk_direccion_usu']?>"  class="controls" type="hidden" name="pk_direccion">

                    <label>Calle:</label> <br>
                    <input value="<?=$row['calle']?>"  class="controls" type="text" name="calle_editar" required> <br>

                    <label>Colonia:</label> <br>
                    <input value="<?=$row['colonia']?>" class="controls" type="text" name="colonia_editar" required> <br>

                    <label>Ciudad:</label> <br>
                    <input value="<?=$row['ciudad']?>" class="controls" type="text" name="ciudad_editar" required> <br>

                    <label>Número Exterior:</label> <br>
                    <input value="<?=$row['num_ext']?>" class="controls" type="text" name="num_ext_editar"> <br> 

                    <label>Referencia:</label> <br>
                    <input value="<?=$row['referencia']?>" class="controls" type="address" name="referencia_editar"> <br> 


                    <input class="btn" type="submit" value="Guardar">
                </form> 

                
                <?php
                } 
                ?>
            </div>
        </div>