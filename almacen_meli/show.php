<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen_meli/cargar_producto.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Datos del producto: <?php echo $nombre;?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-8">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos del producto</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/almacen/create.php" method="post">

                                        <div class="row">

                                                <div class="col-md-4">
                                                    <label for="">Codigo TrucksRepair</label><br>
                                                    <span><?php echo $productos_dato['categoria'];?>000<?php echo $productos_dato['id_producto'];?></span>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="">Categoria</label>
                                                    <input id="id_categoria" name="id_categoria" type="text" class="form-control"
                                                           value="<?php echo $nombre_categoria; ?>" disabled>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">

                                                    <label for="">Nombre del producto</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control"
                                                           value="<?php echo $nombre; ?>" disabled>
                                                </div>

                                        </div>

                                        <div class="row mt-4">

                                                    <div class="col-md-4">

                                                    </div>

                                                    <div class="col-md-8">
                                                        <label for="">Ubicación</label>
                                                        <input id="ubicacion" name="ubicacion" type="text" class="form-control"
                                                               value="<?php echo $ubicacion; ?>" disabled>
                                                    </div>



                                        </div>

                                        <div class="row mt-4">


                                            <div class="col-md-4">

                                                <label for="">Codigo Referencia</label>
                                                <input id="sku" name="sku" type="text" class="form-control"
                                                       value="<?php echo $sku; ?>" disabled>

                                            </div>

                                            <div class="col">
                                                <label for="">Stock</label>
                                                <input id="stock" name="stock" type="text" class="form-control"
                                                       value="<?php echo $stock; ?>" disabled>
                                            </div>

                                            <div class="col">
                                                <label for="">Stock Minimo</label>
                                                <input id="descripcion" name="descripcion" type="text" class="form-control"
                                                       value="<?php echo $stock_minimo; ?>" disabled>
                                            </div>

                                            <div class="col">
                                                <label for="">Precio Compra</label>
                                                <input id="descripcion" name="descripcion" type="text" class="form-control"
                                                       value="<?php echo $precio_compra; ?>" disabled>
                                            </div>

                                            <div class="col">
                                                <label for="">Precio Venta</label>
                                                <input id="descripcion" name="descripcion" type="text" class="form-control"
                                                       value="<?php echo $precio_venta; ?>" disabled>
                                            </div>



                                        </div>

                                        <div class="form-group text-center mt-5">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </form>
                                </div>
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
</div>
<!-- /.content-wrapper -->

<?php include('../layout/parte2.php'); ?>
