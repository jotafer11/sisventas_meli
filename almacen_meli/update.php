<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/categorias/listado_de_categorias.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/almacen_meli/cargar_producto.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Actualizar producto</h1>
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
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Ingrese datos con cuidado</h3>

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
                                    <form action="../app/controllers/almacen_meli/update.php" method="post" enctype="multipart/form-data">

                                        <input type="text" value="<?php echo $id_producto_get; ?>" name="id_producto" hidden>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <label for="">Codigo Trucksrepair</label>
                                                <input id="id" name="id" type="text" class="form-control"
                                                       value="<?php echo $id; ?>">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Categoria</label>
                                                <select name="id_categoria" id="" class="form-control">

                                                    <?php
                                                    foreach ($categorias_datos as $categorias_dato) { ?>
                                                        <option value="<?php echo $categorias_dato['id_categoria']; ?>">
                                                            <?php echo $categorias_dato['nombre_categoria'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Nombre del producto</label>
                                                <input id="nombre" name="nombre" type="text" class="form-control"
                                                       value="<?php echo $nombre; ?>">
                                            </div>

                                        </div>


                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                                <label for="">Codigo Referencia</label>
                                                <input id="sku" name="sku" type="text" class="form-control"
                                                       value="<?php echo $sku; ?>">
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Descripcion</label>
                                                <input id="descripcion" name="descripcion" type="text" class="form-control"
                                                       value="<?php echo $descripcion; ?>">
                                            </div>


                                        </div>


                                
                                    

                                        <div class="row mt-4">


                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">Ubicacion</label>
                                                <input id="ubicacion" name="ubicacion" type="text" class="form-control"
                                                       value="<?php echo $ubicacion; ?>">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">PROVEEDOR</label>
                                                <select name="id_proveedor" id="id_proveedor" class="form-control">

                                                    <?php
                                                    foreach ($proveedores_datos as $proveedores_dato) { ?>
                                                        <option value="<?php echo $proveedores_dato['id_proveedor']; ?>">
                                                            <?php echo $proveedores_dato['nombre_proveedor'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </select>

                                            </div>                                            

                                            <div class="col-md-2">
                                                <label for="">Canales Venta</label>
                                                <input id="canales_venta" name="canales_venta" type="text" class="form-control"
                                                       value="<?php echo $canales_venta; ?>">
                                            </div>




                                        </div>                                        



                                        <div class="row mt-4">


                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">Stock</label>
                                                <input id="stock" name="stock" type="number" class="form-control"
                                                        value="<?php echo $stock; ?>">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">Stock minimo</label>
                                                <input id="stock_minimo" name="stock_minimo" type="number" class="form-control"
                                                       value="<?php echo $stock_minimo; ?>">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">Precio Compra</label>
                                                <input id="precio_compra" name="precio_compra" type="number" class="form-control"
                                                       value="<?php echo $precio_compra; ?>">
                                            </div>

                                            <div class="col-md-2">
                                                <label for="">Precio Venta</label>
                                                <input id="precio_venta" name="precio_venta" type="number" class="form-control"
                                                       value="<?php echo $precio_venta; ?>">
                                            </div>

                                        </div>

                                        <div class="form-group text-center mt-5">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar Producto</button>
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
