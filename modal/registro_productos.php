	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
					<input type="text"class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required  >
				
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				 <select class="form-control" id="estado" name="estado" required>
					<option value="">-- Selecciona estado --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label for="precio" class="col-sm-3 control-label">Precio de venta</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio de venta del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			  
			  
			 <div class="form-group">
				<label for="stock" class="col-sm-3 control-label">Stock</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números" maxlength="8">
				</div>
			  </div>
			   
			   
			    <div class="form-group">
				<label for="unidad" class="col-sm-3 control-label">Unidad</label>
				<div class="col-sm-8">
				 <select class="form-control" id="unidad" name="unidad" required>
					<option value="">-- Selecciona la unidad --</option>
					<option value="kg">kg</option>
					<option value="lt">L</option>
					<option value="gr">gr</option>
					<option value="ml">ml</option>
					<option value="caja">Caja</option>
					<option value="unidad">Unidad</option>
				  </select>
				</div>
			   </div>
			   
			   
			   <div class="form-group">
				<label for="stock_min" class="col-sm-3 control-label">Stock min</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="stock_min" name="stock_min" placeholder="Stock minimo" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			  
			   <div class="form-group">
		<label for="q" class="col-sm-3 control-label">Q*</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="q" name="q" placeholder="Cantidad optima de pedido" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números" maxlength="8">
				</div>
			  </div>
			  
			  
			   <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoria</label>
				<div class="col-sm-8">
				 <select class="form-control" id="categoria" name="categoria" required>
					<option value="">-- Selecciona la categoria --</option>
					<option value="0">Pasteleria</option>
					<option value="1">Chocolateria</option>
					<option value="2">Chucheria</option>
					<option value="3">Bocaditos</option>
					<option value="4">Galletas</option>
					<option value="5">Bebidas</option>
				  </select>
				</div>
			  </div>
			  
			  
			  	   <div class="form-group">
				<label for="tipo" class="col-sm-3 control-label">Tipo de producto</label>
				<div class="col-sm-8">
				 <select class="form-control" id="tipo" name="tipo" required>
					<option value="">-- Selecciona el tipo --</option>
					<option value="1">Final</option>
					<option value="2">Material</option>
					<option value="3">Insumo</option>
					
				  </select>
				</div>
			  </div>
			 
			
			
		<div class="form-group">
				<label for="costo" class="col-sm-3 control-label">Costo de adquisicion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="costo" name="costo" placeholder="Costo del producto" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
		
		
	
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>