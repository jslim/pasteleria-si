<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
    $active_pedidos="";
$active_productos="";	
	$title="Estadísticas de ventas";
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
	
	
      <div class="row">
        <div class="col-md-12">
          <div class="container">
            

      </div>

	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="esta_produccion.php">Estadística de producción</a></li>
            <li role="presentation"><a href="esta_producto.php">Productos más producidos</a></li>
            <li role="presentation" class="active"><a href="esta_ventas.php">Estadística de ventas</a></li>
            <li role="presentation"><a href="esta_producto_ventas.php">Productos más vendidos</a></li>
             <li role="presentation"><a href="esta_compras.php">Estadística compras</a></li>
            <li role="presentation"><a href="esta_producto_compras.php">Materiales o Isumos más comprados</a></li>
			
		</ul>
		
	</div>
	
         

<script type="text/javascript" src="js/jquery.min.js"></script>
		

		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        title: {
            text: 'Ventas de la Pastelería Italiana Venecia <?php echo $hoy = date("Y");?>',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Agos', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Demanda Anual'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'UND'

        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Producción',
            data: [
<?php 
$sql = sprintf("SELECT SUM(cantidad)  as total FROM detalle_factura  JOIN  facturas ON detalle_factura.numero_factura=facturas.numero_factura  GROUP BY MONTH(fecha_factura)");
$result = mysqli_query($con, $sql);

	while ($row=mysqli_fetch_array($result))
	{
	
		?>
			<?php echo $row["total"];?>,
		<?php
	}
	


?>

            ]




            }, {
            name: 'Ingresos',
            data: [
<?php 
$sql = sprintf("SELECT SUM(precio_venta)  as total FROM facturas  JOIN  detalle_factura ON facturas.numero_factura=detalle_factura.numero_factura  GROUP BY MONTH(fecha_factura)");
$result = mysqli_query($con, $sql);

	while ($row=mysqli_fetch_array($result))
	{
	
		?>
			<?php echo $row["total"];?>,
		<?php
	}
	


?>



            ]
        



        }]
    });
});
		</script>






















	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>

<div id="container" style="min-width: 210px; height: 400px ; margin: 0 auto"></div>
  </body>
</html>

</html>