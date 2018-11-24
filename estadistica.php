<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
    $active_pedidos="";
$active_productos="";	
	$title="Estadísticas";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbarGerente.php");
	?>  
	


	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="esta_produccion.php">Estadística de producción</a></li>
			<li role="presentation"><a href="esta_producto.php">Productos más producidos</a></li>
            <li role="presentation"><a href="esta_ventas.php">Estadística de ventas</a></li>
            <li role="presentation"><a href="esta_producto_ventas.php">Productos más vendidos</a></li>
			 <li role="presentation"><a href="esta_compras.php">Estadística compras</a></li>
            <li role="presentation"><a href="esta_producto_compras.php">Materiales o Isumos más comprados</a></li>
		</ul>
		
	</div>
    


<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clientes</span>
              <span class="info-box-number"><?php echo cliente(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Facturas</span>
              <span class="info-box-number"><?php echo factura(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>



<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL PRODUCTOS</span>
              <span class="info-box-number"><?php echo productos(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="glyphicon glyphicon-usd"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL DE VENTAS</span>
              <span class="info-box-number"><?php echo venta(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="glyphicon glyphicon-th-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ORDEN DE PRODUCCIÓN</span>
              <span class="info-box-number"><?php echo produccion(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-heart-empty"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL DE PRODUCTOS PRODUCIDOS</span>
              <span class="info-box-number"><?php echo p_producidos(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-black"><i class="glyphicon glyphicon-ice-lolly-tasted"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PRODUCTOS POR DEBAJO DEL STOCK</span>
              <span class="info-box-number"><?php echo productos_min(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="glyphicon glyphicon-barcode"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MATERIALES O INSUMOS POR DEBAJO DEL STOCK</span>
              <span class="info-box-number"><?php echo materiales_insumos_min(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-grey"><i class="glyphicon glyphicon-ice-lolly"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PRUCTOS FINALES</span>
              <span class="info-box-number"><?php echo productos_finales(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-qrcode"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MATERIALES</span>
              <span class="info-box-number"><?php echo productos_materiales(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>



<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="glyphicon glyphicon-apple"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">INSUMOS</span>
              <span class="info-box-number"><?php echo productos_insumos(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-maroon"><i class="glyphicon glyphicon-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL DE PRODUCTOS</span>
              <span class="info-box-number"><?php echo productos_total(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

      </div>






	</div>



	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/stockmin.js"></script>
  	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>

<div id="container" style="min-width: 210px; height: 400px ; margin: 0 auto"></div>

  </body>
</html>







</html>