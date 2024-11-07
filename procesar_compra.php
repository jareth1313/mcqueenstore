<!-- procesar_compra.php -->
<?php
session_start();
include('clases/Compra.php');
include('clases/DetalleVenta.php');
include('clases/Carrito.php');
include('clases/Producto.php');

$compra = new Compra();
$detalleVenta = new DetalleVenta();
$carrito = new Carrito();
$producto = new Producto();

$carrito->vaciarCarrito();
echo "<script>alert('Compra realizada con éxito'); window.location.href = 'index.php';</script>";

$usuario_id = 1; 
$metodo_pago_id = 2; 
$total = $carrito->calcularTotal($producto);

$id_compra = $compra->insertarCompra($usuario_id, $total, date('Y-m-d H:i:s'), $metodo_pago_id);

foreach ($carrito->obtenerCarrito() as $id_producto => $cantidad) {
    $detalleProducto = $producto->buscar($id_producto)->fetch_assoc();
    $subtotal = $detalleProducto['precio'] * $cantidad;
    $iva = $subtotal * 0.16;
    $total_detalle = $subtotal + $iva;

    $detalleVenta->insertarDetalleVenta($id_compra, $id_producto, $cantidad, $subtotal, $iva, $total_detalle);
}

$carrito->vaciarCarrito();
echo "<script>alert('Compra realizada con éxito'); window.location.href = 'index.php';</script>";


if (!empty($_SESSION['carrito'])) {
    $compra = new Compra();
    $detalleVenta = new DetalleVenta();
    $producto = new Producto();

    $usuario_id = 1; 
    $metodo_pago_id = 2;
    $total = 0;

    foreach ($_SESSION['carrito'] as $id_producto => $cantidad) {
        $precio = $producto->buscar($id_producto)->fetch_assoc()['precio'];
        $total += $precio * $cantidad;
    }

    $id_compra = $compra->insertarCompra($usuario_id, $total, date('Y-m-d H:i:s'), $metodo_pago_id);

    foreach ($_SESSION['carrito'] as $id_producto => $cantidad) {
        $precio = $producto->buscar($id_producto)->fetch_assoc()['precio'];
        $subtotal = $precio * $cantidad;
        $iva = $subtotal * 0.16;
        $total_detalle = $subtotal + $iva;

        $detalleVenta->insertarDetalleVenta($id_compra, $id_producto, $cantidad, $subtotal, $iva, $total_detalle);
    }

    unset($_SESSION['carrito']);
    echo "<script>alert('Compra realizada con éxito'); window.location.href = 'index.php';</script>";
} else {
    echo "<p>El carrito está vacío.</p>";
}
?>
