<?php

include ('../../config.php');


$id = $_POST['id'];
$sku = $_POST['sku'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$precio_meli = $_POST['precio_meli'];
$id_categoria = $_POST['id_categoria'];
$id_proveedor = $_POST['id_proveedor'];

$sentencia = $pdo->prepare("INSERT INTO tb_almacen_meli 
        (id, sku, nombre, descripcion, stock, precio_compra, precio_venta, precio_meli, id_categoria, id_proveedor)
        VALUES (:id,:sku,:nombre,:descripcion,:stock,:precio_compra,:precio_venta,:precio_meli,:id_categoria,:id_proveedor)");


$sentencia->bindParam('id', $id);
$sentencia->bindParam('sku', $sku);
$sentencia->bindParam('nombre', $nombre);
$sentencia->bindParam('descripcion', $descripcion);
$sentencia->bindParam('stock', $stock);
$sentencia->bindParam('precio_compra', $precio_compra);
$sentencia->bindParam('precio_venta', $precio_venta);
$sentencia->bindParam('precio_meli', $precio_meli);
$sentencia->bindParam('id_categoria', $id_categoria);
$sentencia->bindParam('id_proveedor', $id_proveedor);


if($sentencia->execute()) {
    header('Location: '.$URL.'/almacen_meli/');
    session_start();
    $_SESSION['msj'] = "Se registro el producto de la manera correcta";
    }else{
    session_start();
    $_SESSION['msj'] = "Error no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/almacen_meli/create.php');
}



