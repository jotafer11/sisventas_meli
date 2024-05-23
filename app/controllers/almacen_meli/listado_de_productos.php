<?php



$sql_productos = "SELECT a.id as id, a.id_producto as id_producto, a.sku as sku, a.canales_venta as canales_venta,
                    a.descripcion as descripcion, a.nombre as nombre, 
                    a.stock as stock, a.stock_minimo as stock_minimo, a.precio_compra as precio_compra, a.precio_venta as precio_venta,
                    a.precio_meli as precio_meli, prov.nombre_proveedor as proveedor
                    FROM tb_almacen_meli as a INNER JOIN tb_proveedores as prov ON a.id_proveedor = prov.id_proveedor";

$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);

