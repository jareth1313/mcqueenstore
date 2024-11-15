<?php
session_start();
include('../clases/Producto.php');
$producto=New Producto();
//incluyo la clase venta
include('../clases/Venta.php');
$venta=New Venta();

//recibo los datos del formulario previo
$fkproducto=$_POST['pkproducto'];
$cantidad=$_POST['cantidad'];

//Busco si el usuario tiene un carro activo. 
$carritoActivo=$venta->verCarrito($_SESSION['pk_usuario']);
//Dejé un usuario estático,pero debería ser el usuario logueado usando por ejemplo $_SESSION['idusuario'];
if(mysqli_num_rows($carritoActivo)>0){
    //Si el usuario tiene un carro activo, busco el producto en el carro
    $carrito=mysqli_fetch_assoc($carritoActivo);
    $fkventa=$carrito['pk_venta'];
    echo "Ya hay carrito ".$fkventa;
}else{
    $fkventa=$venta->insertar(null, 0, $_SESSION['pk_usuario'], 0);
}
//Obtengo los datos del producto.
$datosProducto=mysqli_fetch_assoc($producto->mostrarPorId($fkproducto));

//Identifico el dato del precio
$precio=$datosProducto['precio'];

$subtotal=$precio*$cantidad;

$respuesta=$producto->agregarCarrito($fkproducto, $fkventa, $cantidad, $subtotal);

if($respuesta){
    echo "<script>
    alert('Producto agregado al carrito con exito');
    location.href='../index.php'
    </script>";
}else{
    echo "Error al agregar el producto al carrito";
}



?>