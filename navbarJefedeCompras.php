<?php
		if (isset($title))
		{
	?>
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="jefedeCompras.php">JEFE DE COMPRAS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="<?php echo $active_ordenesdecompra;?>"><a href="compra.php"><i class='glyphicon glyphicon-shopping-cart'></i> Ordenes de compra</a></li>
		<li class="<?php echo $active_proveedores;?>"><a href="proveedor.php"><i class='glyphicon glyphicon-briefcase'></i> Proveedores</a></li>
        
        	<li class="<?php echo $active_requisiciones;?>"><a href="requisicion.php"><i class='glyphicon glyphicon-book'></i> Requisiciones</a></li>
        
        
        
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Soporte</a></li>
		<li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php
		}
	?>