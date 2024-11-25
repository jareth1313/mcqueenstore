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
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Hora</th>  
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila=mysqli_fetch_assoc($datos)){
            ?>
                <tr>
                    <td><?=$fila['nom_prod']?></td>
                    <td><?=$fila['cantidad']?></td>
                    <td><?=$fila['descripcion']?></td>
                    <td><?=$fila['fecha_venta']?></td>
                    <td><?=$fila['hora_venta']?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
