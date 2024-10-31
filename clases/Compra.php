<?php
class Compra {
    private $conexion;

    function __construct() {
        require_once('conexion.php');
        $this->conexion = new Conexion();
    }

    function insertarCompra($usuario_id, $total, $fecha, $metodo_pago) {
        $consulta = "INSERT INTO compra (fk_usuario, total, fecha, fk_met_pago) VALUES ('$usuario_id', '$total', '$fecha', '$metodo_pago')";
        $this->conexion->query($consulta);
        return $this->conexion->insert_id;
    }
}
?>
