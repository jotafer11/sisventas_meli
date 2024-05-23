<?php

include ('../../config.php');

$sku = $_POST['sku'];
$canales_venta = $_POST['canales_venta'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$id_categoria = $_POST['id_categoria'];
$id_proveedor = $_POST['id_proveedor'];
$id_producto = $_POST['id_producto'];


$sentencia = $pdo->prepare("UPDATE tb_almacen_meli
        SET sku=:sku,
            canales_venta=:canales_venta,
            nombre=:nombre,
            descripcion=:descripcion,
            stock=:stock,
            stock_minimo=:stock_minimo,
            precio_compra=:precio_compra,
            precio_venta=:precio_venta,
            id_proveedor=:id_proveedor,
            id_categoria=:id_categoria
        WHERE id_producto = :id_producto ");


$sentencia->bindParam('sku', $sku);
$sentencia->bindParam('canales_venta', $canales_venta);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('stock', $stock);
$sentencia->bindParam('stock_minimo', $stock_minimo);
$sentencia->bindParam('precio_compra', $precio_compra);
$sentencia->bindParam('precio_venta', $precio_venta);
$sentencia->bindParam('id_categoria', $id_categoria);
$sentencia->bindParam('id_proveedor', $id_proveedor);
$sentencia->bindParam('id_producto', $id_producto);


if($sentencia->execute()) {
    session_start();
    $_SESSION['msj'] = "Se actualizo el producto de la manera correcta";

    header('Location: '.$URL.'/almacen_meli/');
    ?>
    <?php
}else{
    session_start();
    $_SESSION['msj'] = "Error no se pudo actualizar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/almacen_meli/create.php');
}


