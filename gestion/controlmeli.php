<?php
include('../app/config.php');

include('../layout/sesion.php');

include('../layout/parte1.php');

?>


<div class="content-wrapper">

        <div class="container-fluid">
          
      <h1 class="text-center">Control Meli</h1>
      <h3 class="text-center">Precios</h3>          


    <!-- Content -->


    <div class="row">

      <div class="col-md-3">
        <div class="info-box">
      
        <div class="info-box-content">
        <span class="info-box-text"><h4>Prods Controlados | 30 de 500 aprox</h4></span>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%"></div>
          </div>        
        <span class="info-box-number">Wuhlerman (30) Sorl (0) Trucktec (0)</span>
        </div>

        </div>

      </div>      

      <div class="col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa fa-star"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Vendidos meli</span>
        <span class="info-box-number">Top 10</span>
        </div>

        </div>

      </div>

    <div class="col-md-3">
      <div class="info-box">
      <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
      <div class="info-box-content">
      <span class="info-box-text">Ultima mercancia (mayor stock)</span>
      <span class="info-box-number">Wuhlermann, Trucktec, SORL</span>
      </div>

      </div>

    </div>          
      
    </div>

    <div class="row">


    <div class="col-md-3">
      <div class="info-box">
      <div class="info-box-content">
      <span class="info-box-text text-center">Se han realizado</span>
      <span class="info-box-number"><b><h2 class="text-center">32</h2></b></span>
      <p class="text-center">Actualizaciones</p>
      </div>

      </div>

    </div>       
      
    </div>



  

</div>

</div>



<?php include('../layout/parte2.php'); ?>