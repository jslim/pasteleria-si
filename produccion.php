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
	


	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="stock_debajo_min.php">Productos por debajo del stock Min</a></li>
			<li role="presentation"><a href="materiales_debajo_min.php">Insumos o materiales por debajo del stock Min</a></li>
			
		</ul>
		
	</div>
    

<script type="text/javascript" src="js/jquery.min.js"></script>
		

		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        title: {
            text: 'Producción de la Pastelería Italiana Venecia <?php echo $hoy = date("Y");?>
',
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
                text: 'Producción Anual'
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
$sql = sprintf("SELECT SUM(cantidad)  as total FROM ordenp  JOIN  detalle_ordenp ON ordenp.numero_factura=detalle_ordenp.numero_factura  GROUP BY MONTH(fecha_factura)");
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









	</div>



	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/stockmin.js"></script>
  	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>

<div id="container" style="min-width: 210px; height: 400px ; margin: 0 auto"></div>

  </body>
</html>







</html>