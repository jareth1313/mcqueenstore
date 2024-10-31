<?php
include('clases/Producto.php');
include('clases/Carrito.php');

$producto = new Producto();
$carrito = new Carrito();
$itemsCarrito = $carrito->obtenerCarrito();

echo "<h2>Carrito de compras</h2>";
if (!empty($itemsCarrito)) {
    echo "<table>";
    echo "<tr><th>Producto</th><th>Cantidad</th><th>Subtotal</th></tr>";

    $total = 0;
    foreach ($itemsCarrito as $id_producto => $cantidad) {
        $detalleProducto = $producto->buscar($id_producto)->fetch_assoc();
        $subtotal = $detalleProducto['precio'] * $cantidad;
        $total += $subtotal;

        echo "<tr>
                <td>" . htmlspecialchars($detalleProducto['nom_prod']) . "</td>
                <td>" . htmlspecialchars($cantidad) . "</td>
                <td>$" . number_format($subtotal, 2) . "</td>
              </tr>";
    }

    echo "<tr><th colspan='2'>Total:</th><th>$" . number_format($total, 2) . "</th></tr>";
    echo "</table>";
    echo "<a href='procesar_compra.php'>Confirmar Pedido</a>";
} else {
    echo "<p>El carrito está vacío.</p>";
}
?>
