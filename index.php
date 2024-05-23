<?php
include('app/config.php');
include('layout/sesion.php');

include('layout/parte1.php');


include('app/controllers/usuarios/listado_de_usuarios.php');


/* include('app/controllers/categorias/listado_de_categorias.php'); */
include('app/controllers/almacen_meli/listado_de_productos.php');
include('app/controllers/proveedores/listado_de_proveedores.php'); 
/* include('app/controllers/roles/listado_de_roles.php'); */
/* include('app/controllers/compras/listado_de_compras.php'); */

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bienvenido al Sistema de ventas - <?php echo $rol_sesion; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Small Box (Stat card) -->
            <div class="row">


                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php
                            $contador_de_productos = 0;
                            foreach ($productos_datos as $productos_dato) {
                                $contador_de_productos = $contador_de_productos + 1;
                            }
                            ?>
                            <h4 class="text-center">Prods | <?php echo $contador_de_productos;?> de 500</h4>
                            <h6>.</h6>
                            <p>.</p>

                        </div>
                        <a href="<?php echo $URL;?>/almacen_meli" class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>X</h3>
                            <p>Actualizaciones</p>
                        </div>

                        <a href="<?php echo $URL;?>/ventas" class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>



                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato) {
                                $contador_de_proveedores = $contador_de_proveedores + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores;?></h3>


                            <p>Proveedores Registrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <a href="<?php echo $URL;?>/proveedores" class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>.</h3>
                            <p>Compras Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cart-plus"></i>
                        </div>
                        <a href="<?php echo $URL;?>/compras" class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                </div>


            </div>
            <!-- /.row -->

            <h4 class="mb-4 mt-4">Gestión Personalizada</h4>


    <div class="row">

      <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Almacen Controlado</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                    <H5>
                      <li><i class="far fa-circle text-danger"></i> <?php echo $total_oto;?> OTOKAM </li>
                      <li><i class="far fa-circle text-secondary"></i> <?php echo $total_tru;?> TRUCKTEC</li>
                      <li><i class="far fa-circle text-primary"></i> <?php echo $total_srl;?> SORL</li>
                        <li><i class="far fa-circle text-warning"></i> <?php echo $total_ava;?> AVANT</li>
                        <li><i class="far fa-circle text-primary"></i> <?php echo $total_ibm;?> IBM</li>
                      <li><i class="far fa-circle text-primary"></i> <?php echo $total_fc;?> FC </li>
                      <li><i class="far fa-circle text-primary"></i> <?php echo $total_riv;?> RIVECAR </li>
                  </H5>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <!-- /.footer -->
            </div>


      </div>


      <div class="col-md-6">

            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Últimos Productos ingresados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>PROVEEDOR</th>
                      <th>FECHA</th>
                      <th>IMPORTE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>OTOKAM</td>
                      <td>14/05/2024</td>
                      <td>$200.000</td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>TRUCKTEC</td>
                      <td>14/05/2024</td>
                      <td>$400.000</td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>SORL</td>
                      <td>14/05/2024</td>
                      <td>$100.000</td>
                    </tr>

                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Nueva recepción</a> -->
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todas</a>
              </div>
              <!-- /.card-footer -->
            </div>        
            
      </div>      


      </div>


    <div class="row">


    <div class="col-md-6">

    </div>       
      
    </div>                                





        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include('layout/parte2.php'); ?>
