<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	$id_factura= $_SESSION['id_factura'];
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id_vendedor'])) {
           $errors[] = "ID vacío";
		} else if ($_POST['estado_factura']==""){
			$errors[] = "Selecciona el estado de la factura";
		} else if (
			$_POST['estado_factura']!="" 
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_vendedor=intval($_POST['id_vendedor']);

		$estado_factura=intval($_POST['estado_factura']);
		
		$sql="UPDATE ordenp SET  id_vendedor='".$id_vendedor."', estado_factura='".$estado_factura."' WHERE id_factura='".$id_factura."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				
				//AQUI DEBERIA SUMAR AL STOCK
				
$sql2=mysqli_query($con, "select * from products, ordenp, detalle_ordenp where ordenp.numero_factura=detalle_ordenp.numero_factura and  ordenp.id_factura='$id_factura' and products.id_producto=detalle_ordenp.id_producto ");
while ($row=mysqli_fetch_array($sql2))
	{ $id_producto=$row["id_producto"];
	  $cantidad=$row['cantidad'];
	$sql3=mysqli_query($con,"UPDATE products SET stock=stock+'$cantidad' WHERE id_producto=$id_producto");}
				
				//hasta aca
				
				$messages[] = "Factura ha sido actualizada satisfactoriamente.";
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