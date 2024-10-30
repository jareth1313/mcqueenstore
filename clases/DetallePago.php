<?php

class DetallePago
{
    function __construct() {
        require_once('conexion.php'); 
        $this->conexion = new Conexion();
    }
    function insertar($fk_pedido, $fk_met_pago, $monto, $fecha_pago, $fk_estado, $fk_usuario, $referencia = null, $detalles = null) {
        $consulta = "INSERT INTO detalle_pago (fk_pedido, fk_met_pago, monto, fecha_pago, fk_estado, fk_usuario, referencia, detalles) 
                     VALUES ('{$fk_pedido}', '{$fk_met_pago}', '{$monto}', '{$fecha_pago}', '{$fk_estado}', '{$fk_usuario}', '{$referencia}', '{$detalles}')";
        $respuesta = $this->conexion->query($consulta);
        return $this->conexion->insert_id; 
    }

    function mostrarPorId($idpago) {
        $consulta = "SELECT * FROM detalle_pago WHERE pk_detalle_pago = '{$idpago}'";
        $respuesta = $this->conexion->query($consulta);
        return $respuesta;
    }

    function actualizarEstado($idpago, $estado) {
        $consulta = "UPDATE detalle_pago SET fk_estado = '{$estado}' WHERE pk_detalle_pago = '{$idpago}'";
        $respuesta = $this->conexion->query($consulta);
        return $respuesta;
    }
}

?>
