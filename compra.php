<?php
	

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";
    $active_ordenesdecompra="active";	
	$title="Compras";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	if($_SESSION['rol']=='3')include("navbarJefedeCompras.php");
	if($_SESSION['rol']=='2')include("navbarGerente.php");
	if($_SESSION['rol']=='5')include("navbarProduccion.php");
	
	?>  
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		 <?php if($_SESSION['rol']=='3') { ?>  <div class="btn-group pull-right">
				<a  href="nueva_compra.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Orden de Compra</a>
			</div> <?php } ?>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Orden de compra</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Proveedor # de orden</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del proveedor o # de orden" onkeyup='load(1);'>
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
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/comprass.js"></script>
  </body>
</html>