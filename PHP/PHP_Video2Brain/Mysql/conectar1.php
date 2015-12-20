<?php
	$conexion = mysql_connect("localhost","rootphp","toor");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

	// Creacion de una base de datos
	
	if (mysql_query("CREATE DATABASE primeraBase",$conexion)) {
		echo "Se ha creado la base de datos";
	}
	else{
		echo "No se ha creado la base de datos por el siguiente error: ".mysql_error();
	}
	
    // Cerrar la conexion
	mysql_close($conexion);

?>