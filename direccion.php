<?php
include('nav.php');
include('clases/Direccion.php');
$direccion=new Direccion();

$pk_usuario=$_SESSION['pk_usuario'];

$resultado=$direccion->mostrarDireccion($pk_usuario);

?>

<a style="color: black; padding: 5px;" href="agregar_direccion.php">Agregar Dirección</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Estilizada</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Ciudad</th>
                    <th>Número Exterior</th>
                    <th>Referencia</th>
                    <th>Estatus</th>
                    <th></th>
                
                    <th></th>  
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila=mysqli_fetch_assoc($resultado)){
            ?>
                <tr>
                    <td><?=$fila['calle']?></td>
                    <td><?=$fila['colonia']?></td>
                    <td><?=$fila['ciudad']?></td>
                    <td><?=$fila['num_ext']?></td>
                    <td><?=$fila['referencia']?></td>
                    <td><?=$fila['estatus']?></td>
                    <td>
                        <?php echo '<a href="editar_direccion.php?pk_direccion='.$fila['pk_direccion_usu'].'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg></a> ' 
                         ?>
                    </td>
                    <td>
                        <?php echo '<a href="formularios/direccion_baja.php?pk_direccion='.$fila['pk_direccion_usu'].'" title="Eliminar Categoria">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg></a> '  
                        ?>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
