<?php
include('nav.php');
include('clases/Venta.php');
$venta=new Venta();

if(isset($_SESSION['pk_usuario'])){
$datos=$venta->historial($_SESSION['pk_usuario']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ss</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Historial de Compras</h1>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Dirección</th>
                    <th>Método de Pago</th> 
                    <th>Estatus</th>  
                </tr>
            </thead>
            <tbody>
            <?php
                while($fila=mysqli_fetch_assoc($datos)){
                
            ?>
                <tr>
                    <td><?=$fila['nom_prod']?></td>
                    <td><?=$fila['cantidad']?></td>
                    <td><?=$fila['total']."$"?></td>
                    <td><?=$fila['fecha_venta']?></td>
                    <td><?=$fila['hora_venta']?></td>
                    <td><?="Calle: ".$fila['calle']." Colonia: ".$fila['colonia']?></td>
                    <td><?=$fila['nom_met_pago']?></td>
                    <td><?=$fila['estatus_venta']?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
    <?php
            }else{
                    echo "<script>
                    location.href='index.php'
                    </script>";
                };
                ?>
</body>
</html>
