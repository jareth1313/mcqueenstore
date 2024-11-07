<?php
class Carrito {
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
    }

    public function agregarProducto($id_producto, $cantidad) {
        if (isset($_SESSION['carrito'][$id_producto])) {
            $_SESSION['carrito'][$id_producto] += $cantidad;
        } else {
            $_SESSION['carrito'][$id_producto] = $cantidad;
        }
    }

    public function eliminarProducto($id_producto) {
        if (isset($_SESSION['carrito'][$id_producto])) {
            unset($_SESSION['carrito'][$id_producto]);
        }
    }

    public function obtenerCarrito() {
        return $_SESSION['carrito'];
    }

    public function calcularTotal($producto) {
        $total = 0;
        foreach ($_SESSION['carrito'] as $id_producto => $cantidad) {
            $detalleProducto = $producto->buscar($id_producto)->fetch_assoc();
            $subtotal = $detalleProducto['precio'] * $cantidad;
            $total += $subtotal;
        }
        return $total;
    }

    public function vaciarCarrito() {
        $_SESSION['carrito'] = [];
    }
}
?>
