<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }

	/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$active_facturas="";
	$active_productos="active";
	$active_clientes="";
	$title="Productos";
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
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-ice-lolly-tasted"></i></span>

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
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-barcode"></i></span>

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
            <span class="info-box-icon bg-purple"><i class="glyphicon glyphicon-apple"></i></span>

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
            <span class="info-box-icon bg-blue"><i class="glyphicon glyphicon-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL DE PRODUCTOS</span>
              <span class="info-box-number"><?php echo productos_total(); ?></span>
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
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-info" data-toggle="modal" data-target="#nuevoProducto"><span class="glyphicon glyphicon-plus" ></span> Nuevo Producto</button>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Productos</h4>
		</div>
		<div class="panel-body">
		
			
			
			<?php
			include("modal/registro_productos.php");
			include("modal/editar_productos.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Código o nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Código o nombre del producto" onkeyup='load(1);'>
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
	<script type="text/javascript" src="js/productos.js"></script>
  </body>
</html>
<script>
$( "#guardar_producto" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax_productos").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax_productos").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_producto" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

	function obtener_datos(id){
			var codigo_producto = $("#codigo_producto"+id).val();
			var nombre_producto = $("#nombre_producto"+id).val();
			var estado = $("#estado"+id).val();
			var precio_producto = $("#precio_producto"+id).val();
			var costo = $("#costo"+id).val();
			var stock_min= $("#stock_min"+id).val();
			var stock = $("#stock"+id).val();
			var q= $("#q"+id).val();
			var tipo= $("#tipo"+id).val();
			var categoria= $("#categoria"+id).val();
			var unidad= $("#unidad"+id).val();
			
			$("#mod_id").val(id);
			$("#mod_codigo").val(codigo_producto);
			$("#mod_nombre").val(nombre_producto);
			$("#mod_precio").val(precio_producto);
			$("#mod_estado").val(estado);
			$("#mod_costo").val(costo);
			$("#mod_stock_min").val(stock_min);
			$("#stock").val(stock);
			$("#q").val(q);
			$("#tipo").val(tipo);
			$("#categoria").val(categoria);
			$("#unidad").val(unidad);

		}
</script>