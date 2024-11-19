<?php
class Venta {
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertar($folio, $total, $fkusuario, $estatus){
        $sql ="INSERT INTO venta(pk_venta, folio, hora_venta, fecha_venta, fk_usuario, fk_met_pago, 
        fk_direccion_usu, total, estatus) VALUES (Null, '{$folio}', NOW(), NOW(), '{$fkusuario}', NULL, NULL, '{$total}', '{$estatus}')";
        $respuesta=$this->conexion->query($sql);
        $id=$this->conexion->insert_id;
        return $id;
    }

    function insertarDetalle($fkproducto, $fkventa, $cantidad, $subtotal, $estatus){
        $sql="INSERT INTO detalle_venta(pk_detalle_venta, fk_producto, fk_venta, cantidad, subtotal, estatus
        VALUES (NULL, '{$fkproducto}', '{$fkventa}', '{$cantidad}', '{$subtotal}', '{$estatus}')";
        $respuesta=$this->conexion->query($sql);
        return $this->conexion->insert_id; 
    }

    function verCarrito($pkusuario){
        $sql="SELECT * FROM venta WHERE fk_usuario='{$pkusuario}'
        AND estatus=0";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function mostrarVenta($pkusuario, $estatus){
        $sql="SELECT * FROM venta v INNER JOIN detalle_venta d ON v.pk_venta=d.fk_venta INNER JOIN producto p ON
        p.pk_producto=d.fk_producto WHERE v.fk_usuario='{$pkusuario}'
        AND v.estatus='{$estatus}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function eliminarCarrito($pk_detalle_venta){
        $sql="DELETE FROM detalle_venta WHERE pk_detalle_venta='{$pk_detalle_venta}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }
}
?>