<?php
include('nav.php');
include('clases/Usuario.php');
$usuario=new Usuario();

$pkusu=$_GET['pk_usuario'];

$respuesta=$usuario->buscar($pkusu);

?>

<div class="conteusu" >

        <div class="conte" id="contUsuario">
            <div class="mostrar-usu" id="opciones">
                <?php
                while($row=mysqli_fetch_assoc($respuesta)){
                ?>
                <form action="formularios/editar_informacion.php" method="POST">
                    <h2>Editar Información</h2>
                    <input value="<?=$row['pk_usuario']?>"  class="controls" type="hidden" name="pk_usu">

                    <label>Nombre:</label>
                    <input value="<?=$row['nom_usu']?>"  class="controls" type="text" name="nombre_editar" required> <br>

                    <label>Apellido Paterno:</label> 
                    <input value="<?=$row['ap_usu']?>" class="controls" type="text" name="apaterno_editar" required> <br>

                    <label>Apellido Materno:</label> 
                    <input value="<?=$row['am_usu']?>" class="controls" type="text" name="amaterno_editar"> <br> 

                    <label>Email:</label> 
                    <input value="<?=$row['correo']?>" class="controls" type="email" name="correo_editar" required> <br> 

                    <label>Contraseña:</label>
                    <input value="<?=$row['passwrd']?>" class="controls" type="text" name="contra_editar" required>

                    <div class="conte-link">
                    <input class="btnn" type="submit" value="Guardar">
                    </div>
                    
                </form> 

                
                <?php
                } 
                ?>
            </div>
        </div>
    </div>
