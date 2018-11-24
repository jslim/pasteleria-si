<?php 


function get_row($table,$row, $id, $equal){
	global $con;
	$query=mysqli_query($con,"select $row from $table where $id='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
?>
<?php 

 require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");//Conti

function cliente()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM clientes");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}


function factura()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM facturas");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function venta()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT ROUND(SUM(total_venta),2)  as total FROM facturas ");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}


function productos()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT SUM(cantidad)  as total FROM detalle_factura");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function productos_finales()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products WHERE  id_tipo=1");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function productos_materiales()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products WHERE  id_tipo=2");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}


function productos_insumos()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products WHERE  id_tipo=3");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function productos_total()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function productos_min()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products WHERE products.id_tipo=1 and products.stock_min>=products.stock");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function materiales_insumos_min()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM products WHERE (products.id_tipo=2 or products.id_tipo=3) and products.stock_min>=products.stock");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function produccion()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM ordenp");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function requisicion()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT COUNT(*)  as total FROM requisicion");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function p_producidos()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT SUM(cantidad)  as total FROM detalle_ordenp");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}

function p_requeridos()
{
	global $con;
	$query_ConsultaFuncion = sprintf("SELECT SUM(cantidad)  as total FROM detalle_requisicion");
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	return $row_ConsultaFuncion['total'];
	mysqli_free_result($ConsultaFuncion);
}
?>