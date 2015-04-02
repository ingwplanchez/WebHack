<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

	// Creacion de una base de datos
	
	if (mysql_query("CREATE DATABASE primeraBase",$conexion)) {
		echo "Se ha creado la base de datos";
	}
	else{
		echo "No se ha creado la base de datos";
	}
	
    // Cerrar la conexion
	mysql_close($conexion);

?>