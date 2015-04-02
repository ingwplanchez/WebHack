<?php
	// Establecor conexion
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	if(!$conexion){
		die("no he podido conectar por la siguiente razon".mysql_error());
	}

	// Seleccion de la base de datos
	mysql_select_db("agenda",$conexion); // Selecccion de la base de datos

	// Borrar un usuario especifico
	mysql_query("DELETE FROM miagenda WHERE Nombre='Dainerys' AND Apellido ='Targayen'");

	mysql_close();
?>