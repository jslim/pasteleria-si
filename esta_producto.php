<?php
	include("funciones.php");

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
    $active_pedidos="";
$active_productos="";	
	$title="Estadísticas de producción";
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
            <li role="presentation" class="active"><a href="esta_producto.php">Productos más producidos</a></li>
            <li role="presentation"><a href="esta_ventas.php">Estadística de ventas</a></li>
            <li role="presentation"><a href="esta_producto_ventas.php">Productos más vendidos</a></li>
             <li role="presentation"><a href="esta_compras.php">Estadística compras</a></li>
            <li role="presentation"><a href="esta_producto_compras.php">Materiales o Isumos más comprados</a></li>
			
		</ul>
		
	</div>
	
         

<script type="text/javascript" src="js/jquery.min.js"></script>
		

		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'TOP 5 de los productos que más se producen en la Pastelería Italiana Venecia'
        },
        subtitle: {
            text: ' '
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Cantidad',
            data: [
                

<?php 
$sql = sprintf("SELECT SUM(cantidad)  as total, nombre_producto FROM detalle_ordenp JOIN  products ON detalle_ordenp.id_producto=products.id_producto GROUP BY detalle_ordenp.id_producto order by total desc limit 5");
$result = mysqli_query($con, $sql);

    while ($row=mysqli_fetch_array($result))
    {
    
        ?>
            ['<?php echo $row["nombre_producto"];?>', <?php echo $row["total"];?>],
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