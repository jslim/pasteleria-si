<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
    $active_pedidos="";
$active_productos="";
$active_recepciones="active";	
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
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Orden a recibir hoy</h4>
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
	<script type="text/javascript" src="js/comprash.js"></script>
  </body>
</html>

    



	