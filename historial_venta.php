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
    <script src="estatus.js"></script>
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
                    <th colspan="2">Estatus</th> 
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila=mysqli_fetch_array($datos)){
                $productos=$venta->detalle_venta($fila['pk_venta']);

            

                
            ?>
            <tr style="background-color: gray">
                <td><?="Pedido: ".$fila['pk_venta']; ?></td>
                <td><?="Fecha: ".$fila['fecha_venta']; ?></td>
                <td><?="Hora: ".$fila['hora_venta']; ?></td>
                <td class="status">
                <?=$fila['estatus'];?> 
               <?= '<a class="btn" style=" border: 1px black solid;
                color: black; background-color: white;" href="actualizar_estatus.php?pk_venta='.$fila['pk_venta'].'">Entregado</a>' ?>
        </td>
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
