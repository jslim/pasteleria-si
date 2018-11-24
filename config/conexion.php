<?php
	/*-------------------------
	Autor: Obed Alvarado
    Editado: Josè Delgado 
    e-mail: josdelgaur@gmail.com
	---------------------------*/
	# conectarse la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
