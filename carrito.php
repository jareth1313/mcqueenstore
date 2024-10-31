<?php 
session_start();
include('clases/Producto.php');
include('clases/Carrito.php');

$carrito = new Carrito();
$producto = new Producto();

echo "<h2>Carrito de compras</h2>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $carrito->agregarProducto($id_producto, $cantidad);

    echo "<script>alert('Producto agregado al carrito'); window.location.href = 'catalogo.php';</script>";
}

if (!empty($_SESSION['carrito'])) {
    $total = 0;
    echo "<table>";
    echo "<tr>
            <th colspan='2'>Producto</th>
            <th>Cantidad</th>
            <th>Importe</th>
          </tr>";
    
    
    foreach ($_SESSION['carrito'] as $id_producto => $cantidad) {
        $detalleProducto = $producto->buscar($id_producto)->fetch_assoc();

        $subtotal = $detalleProducto['precio'] * $cantidad;
        $total += $subtotal;

       printf(
    "<tr>
        <td><img src='../images/%s' alt='%s' width='50'></td>
        <td>%s</td>
        <td>%d</td>
        <td>$%.2f</td>
    </tr>",
    htmlspecialchars($detalleProducto['foto']),
    htmlspecialchars($detalleProducto['nom_prod']),
    htmlspecialchars($detalleProducto['nom_prod']),
    $cantidad,
    $subtotal
);
    }

    echo "<tr>
            <th colspan='3'>Total:</th>
            <th>$" . number_format($total, 2) . "</th>
          </tr>";
    echo "</table>";
    echo "<a href='procesar_compra.php'>Confirmar Pedido</a>";
} else {
    echo "<p>El carrito está vacío.</p>";
}


?>
