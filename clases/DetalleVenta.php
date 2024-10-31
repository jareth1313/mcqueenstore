<?php
class DetalleVenta {
    private $conexion;

    function __construct() {
        require_once('conexion.php');
        $this->conexion = new Conexion();
    }

    function insertarDetalleVenta($id_compra, $id_producto, $cantidad, $subtotal, $iva, $total) {
        $consulta = "INSERT INTO detalle_venta (fk_pedido, fk_producto, cantidad, subtotal, iva, total) 
                     VALUES ('$id_compra', '$id_producto', '$cantidad', '$subtotal', '$iva', '$total')";
        $this->conexion->query($consulta);
    }
}
?>
