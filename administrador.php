<?php

	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_facturas="";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";
    $active_ordenesdecompra="";	
	$title="Administrador";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbarAdministrador.php");
	header("location:usuarios.php");
	?>  
	<hr>				
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>

  </body>
</html>