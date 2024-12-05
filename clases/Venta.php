<?php
class Venta {
    function __construct(){
        require_once('conexion.php');
        $this->conexion=new Conexion();
    }

    function insertar($folio, $total, $fkusuario, $estatus){
        $sql ="INSERT INTO venta(pk_venta, folio, hora_venta, fecha_venta, fk_usuario, fk_met_pago, 
        fk_direccion_usu, total, estatus_venta) VALUES (Null, '{$folio}', NOW(), NOW(), '{$fkusuario}', NULL, NULL, '{$total}', '{$estatus}')";
        $respuesta=$this->conexion->query($sql);
        $id=$this->conexion->insert_id;
        return $id;
    }

    function contar(){
        $sql="SELECT COUNT(*) as numero FROM venta WHERE estatus_venta='En camino'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;

    }

    function insertarDetalle($fkproducto, $fkventa, $cantidad, $subtotal, $estatus){
        $sql="INSERT INTO detalle_venta(pk_detalle_venta, fk_producto, fk_venta, cantidad, subtotal, estatus_venta
        VALUES (NULL, '{$fkproducto}', '{$fkventa}', '{$cantidad}', '{$subtotal}', '{$estatus}')";
        $respuesta=$this->conexion->query($sql);
        return $this->conexion->insert_id; 
    }

    function verCarrito($pkusuario){
        $sql="SELECT * FROM venta WHERE fk_usuario='{$pkusuario}'
        AND estatus_venta='0'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function mostrarVenta($pkusuario){
        $sql="SELECT * FROM venta v INNER JOIN detalle_venta d ON v.pk_venta=d.fk_venta INNER JOIN producto p ON
        p.pk_producto=d.fk_producto WHERE v.fk_usuario='{$pkusuario}'
        AND v.estatus_venta='0'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function realizarCompra($pkventa, $folio, $fkpago, $fkdireccion, $total){
        $sql="UPDATE venta SET fk_met_pago='{$fkpago}', folio='{$folio}',  fk_direccion_usu='{$fkdireccion}', total='{$total}', estatus_venta='En camino' WHERE pk_venta='{$pkventa}' ";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function eliminarCarrito($pk_detalle_venta){
        $sql="DELETE FROM detalle_venta WHERE pk_detalle_venta='{$pk_detalle_venta}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;
    }

    function historial($pkusuario){
        $sql="SELECT * FROM venta v INNER JOIN usuario u ON v.fk_usuario=u.pk_usuario 
        INNER JOIN detalle_venta dv ON dv.fk_venta=v.pk_venta INNER JOIN producto p ON 
        p.pk_producto=dv.fk_producto INNER JOIN direccion_usu du ON du.pk_direccion_usu=v.fk_direccion_usu 
        INNER JOIN met_pago mp ON v.fk_met_pago=mp.pk_met_pago WHERE v.fk_usuario='{$pkusuario}' AND v.estatus_venta='Entregado' OR v.estatus_venta='En camino'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;    
    }

    //Manejar por pedidos 
    function historial_venta(){
        $sql= "SELECT * FROM venta WHERE estatus_venta='Entregado' OR estatus_venta='En camino' ";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;  
    }

    // Fucción para organizar por pedidos 
    function detalle_venta($pk_venta){
        $sql= "SELECT * FROM venta v INNER JOIN detalle_venta dv ON v.pk_venta=dv.fk_venta 
        INNER JOIN producto p ON dv.fk_producto=p.pk_producto WHERE v.pk_venta='{$pk_venta}'";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;  
    }

    function cambiarEstatus($pkventa){
        $sql="UPDATE venta SET estatus_venta='Entregado' WHERE pk_venta='{$pkventa}' ";
        $respuesta=$this->conexion->query($sql);
        return $respuesta;  
    }
}
?>
