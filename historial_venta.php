<?php
include('nav.php');
include('clases/Venta.php');
$venta=new Venta();

$datos=$venta->historial_venta();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Estilizada</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <br>
    <h1>Historial De Venta</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Descripción</th> 
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila=mysqli_fetch_array($datos)){
                $productos=$venta->detalle_venta($fila['pk_venta']);

            ?>
            <tr style="background-color: gray">
                <td>Pedido</td>
                <td><?=$fila['fecha_venta']; ?></td>
                <td><?=$fila['hora_venta']; ?></td>
            </tr>
            <?php
                 while($fila2=mysqli_fetch_array($productos)){
            ?>
                <tr>
                    
                    <td><?=$fila2['nom_prod']?></td>
                    <td><?=$fila2['cantidad']?></td>
                    <td><?=$fila2['descripcion']?></td>
                    
                </tr>
            <?php
                }
            ?>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
