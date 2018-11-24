<?php
	include("funciones.php");

require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }


	
	$active_facturas="";
	$active_productos="";
	$active_pedidos="active";
	$active_clientes="";
	$active_usuarios="";	
	$title="Orden de producción";
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
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-th-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ORDEN DE PRODUCCIÓN</span>
              <span class="info-box-number"><?php echo produccion(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="glyphicon glyphicon-ice-lolly-tasted"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL DE PRODUCTOS PRODUCIDOS</span>
              <span class="info-box-number"><?php echo p_producidos(); ?></span>
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
		<div class="panel panel-info">
		<div class="panel-heading">
		    <div class="btn-group pull-right" >
				<a  href="nuevo_pedido.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva orden</a>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Orden de producción</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label"># de orden</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="# de orden" onkeyup='load(1);'>
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
	<script type="text/javascript" src="js/pedido.js"></script>
  </body>
</html>