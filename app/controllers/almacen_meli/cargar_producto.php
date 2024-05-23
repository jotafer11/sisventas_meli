<?php

$id_producto_get = $_GET['id'];

$sql_productos = "SELECT *, cat.nombre_categoria as categoria
                    FROM tb_almacen_meli as a INNER JOIN tb_categorias as cat ON a.id_categoria = cat.id_categoria
                    WHERE id_producto = '$id_producto_get'";

$query_productos = $pdo-> prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos_datos as $productos_dato) {
    $id = $productos_dato['id'];    
    $sku = $productos_dato['sku'];
    $canales_venta = $productos_dato['canales_venta'];
    $nombre = $productos_dato['nombre'];
    $nombre_categoria = $productos_dato['nombre_categoria'];
    $descripcion = $productos_dato['descripcion'];
    $ubicacion = $productos_dato['ubicacion'];
    $stock = $productos_dato['stock'];
    $stock_minimo = $productos_dato['stock_minimo'];
    $precio_compra = $productos_dato['precio_compra'];
    $precio_venta = $productos_dato['precio_venta'];
    $id_categoria = $productos_dato['id_categoria'];
    $id_proveedor = $productos_dato['id_proveedor'];
}
