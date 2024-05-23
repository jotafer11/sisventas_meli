<?php

$sql_proveedores = "SELECT * FROM tb_proveedores";

$query_proveedores = $pdo->prepare($sql_proveedores);
$query_proveedores->execute();

$proveedores_datos = $query_proveedores->fetchAll(PDO::FETCH_ASSOC);



$sql_oto = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=1";
$result = $pdo->query($sql_oto);
$total_oto = $result->fetchColumn();


$sql_tru = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=2";
$result = $pdo->query($sql_tru);
$total_tru = $result->fetchColumn();


$sql_srl = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=3";
$result = $pdo->query($sql_srl);
$total_srl = $result->fetchColumn();


$sql_ava = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=4";
$result = $pdo->query($sql_ava);
$total_ava = $result->fetchColumn();

$sql_ibm = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=5";
$result = $pdo->query($sql_ibm);
$total_ibm = $result->fetchColumn();


$sql_fc = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=6";
$result = $pdo->query($sql_fc);
$total_fc = $result->fetchColumn();

$sql_riv = "SELECT COUNT(*) total FROM tb_almacen_meli WHERE id_proveedor=7";
$result = $pdo->query($sql_riv);
$total_riv = $result->fetchColumn();



