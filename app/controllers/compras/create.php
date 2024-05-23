<?php

include ('../../config.php');

$id_producto = $_GET['id_producto'];
$nro_compra = $_GET['nro_compra'];
$fecha_compra = $_GET['fecha_compra'];
$id_proveedor = $_GET['id_proveedor'];
$comprobante = $_GET['comprobante'];
$id_usuario = $_GET['id_usuario'];
$precio_compra = $_GET['precio_compra'];
$cantidad_compra = $_GET['cantidad_compra'];
$stock_total = $_GET['stock_total'];

$pdo->beginTransaction();

$sentencia = $pdo->prepare("INSERT INTO tb_compras 
        (id_producto, nro_compra, fecha_compra, id_proveedor, comprobante, id_usuario, precio_compra, cantidad_compra)
        VALUES (:id_producto,:nro_compra,:fecha_compra,:id_proveedor,:comprobante,:id_usuario,:precio_compra,:cantidad_compra)");


$sentencia->bindParam('id_producto', $id_producto);
$sentencia->bindParam('nro_compra', $nro_compra);
$sentencia->bindParam('fecha_compra', $fecha_compra);
$sentencia->bindParam('id_proveedor', $id_proveedor);
$sentencia->bindParam('comprobante', $comprobante);
$sentencia->bindParam('id_usuario', $id_usuario);
$sentencia->bindParam('precio_compra', $precio_compra);
$sentencia->bindParam('cantidad_compra', $cantidad_compra);

if($sentencia->execute()) {

//actualiza el stock desde la compra
    $sentencia = $pdo->prepare("UPDATE tb_almacen SET stock=:stock WHERE id_producto = :id_producto ");
    $sentencia->bindParam('stock', $stock_total);
    $sentencia->bindParam('id_producto', $id_producto);
    $sentencia->execute();

    $pdo->commit();

    session_start();
    $_SESSION['msj'] = "Se registro la compra de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/compras/index.php');
    ?>

    <?php
}else{

    $pdo->rollBack();

    session_start();
    $_SESSION['msj'] = "Error no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/compras/create.php');
    ?>


    <?php
}