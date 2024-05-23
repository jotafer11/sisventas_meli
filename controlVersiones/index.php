<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

?>

<style>
    
    .hr_cel {
        border: 2px solid #343a40;
        margin-top: 40px;
        margin-bottom: 40px;
    }


</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title text-center">HISTÓRICO DE VERSIONES </h3>

                            <div class="card-tools">

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                        	<h3><b>Histórico versiones y próximas funcionalidades</b></h3>
                        	<hr>

                        	<h4><b>Versión 1.1 (08/05/24)</b> <hr></h4>

                        	<ul>
                        		<li>Clientes, Ventas y presupuestos</li>
                        		<li>Lista para nuevas ofertas</li>
                        	</ul>

                        	<p>Proximas funcionalidades</p>

                        	<ul>
                                <li>Ticket de venta PDF</li>
                        		<li>Agregar imagen a productos en oferta</li>
                        	</ul>


                        <hr class="hr_cel">

                            <h4><b>Versión 1.2 (13/05/2024)</b><hr></h4>

                            <ul>
                                <li>Se agrego control meli</li>
                                <li>Permitir actualizar precios y stock productos Mercado Libre (Stock se actualiza automaticamente con ventas realizadas)</li>
                            </ul>

                            <p>Proximas funcionalidades</p>

                            <ul>
                                <li>Contador de actualizaciones a productos para reporte diario</li>

                            </ul>

                        </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<!-- /.content-wrapper -->


<?php include('../layout/parte2.php'); ?>