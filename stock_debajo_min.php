<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
    $active_pedidos="";
$active_productos="";	
	$title="Jefe de producción";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbarProduccion.php");
	?>  
	
	<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-ice-lolly-tasted"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">PRODUCTOS POR DEBAJO DEL STOCK</span>
              <span class="info-box-number"><?php echo productos_min(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-barcode"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MATERIALES O INSUMOS POR DEBAJO DEL STOCK</span>
              <span class="info-box-number"><?php echo materiales_insumos_min(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>







      <div class="row">
        <div class="col-md-12">
          <div class="container">
            

      </div>

	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="stock_debajo_min.php">Productos por debajo del stock Min</a></li>
			<li role="presentation"><a href="materiales_debajo_min.php">Insumos o materiales por debajo del stock Min</a></li>
			
		</ul>
		
	</div>
	
		<br>
		</br>
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		    <div class="btn-group pull-right" >
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Productos por debajo del stock Min</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Codigo o producto</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Codigo o producto" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
		</div>	
		
	</div>



	</div>



	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/stockmin.js"></script>
  </body>
</html>

</html>