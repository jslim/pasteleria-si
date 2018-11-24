<?php
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['codigo'])) {
           $errors[] = "Código vacío";
        } else if (empty($_POST['nombre'])){
			$errors[] = "Nombre del producto vacío";
		} else if ($_POST['estado']==""){
			$errors[] = "Selecciona el estado del producto";
		} else if (empty($_POST['precio'])){
			$errors[] = "Precio de venta vacío";
		
		//////////////////////////VALIDAR LOS CAMPOS QUE FALTAN ....ANTUAN VALIDALOSSSSSSSSS
		
		
		
		} else if (
			!empty($_POST['codigo']) &&
			!empty($_POST['nombre']) &&
			$_POST['estado']!="" &&
			!empty($_POST['precio'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que 

		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$estado=intval($_POST['estado']);
		$precio_venta=floatval($_POST['precio']);
		$costo=floatval($_POST['costo']);
		$date_added=date("Y-m-d H:i:s");
		$tipo=intval($_POST["tipo"]);
		$categoria=intval($_POST["categoria"]);
		$q=intval($_POST['q']);
		$stock=intval($_POST['stock']);
		$stock_min=intval($_POST['stock_min']);
		$unidad=mysqli_real_escape_string($con,(strip_tags($_POST["unidad"],ENT_QUOTES)));

		// // // // // // // // // // // // // // // // // // // // // // // AGREGAR LOS NUEVOS A LA BD
		
		$sql="INSERT INTO products (codigo_producto, nombre_producto, status_producto, date_added, precio_producto,stock, costo_producto, id_categoria,unidad,q , id_tipo, stock_min) VALUES ('$codigo','$nombre','$estado','$date_added','$precio_venta', '$stock', '$costo', '$categoria', '$unidad','$q', '$tipo', '$stock_min')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>