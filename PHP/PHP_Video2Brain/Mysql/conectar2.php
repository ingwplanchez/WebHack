<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

	// Creacion de una base de datos
	/*
	if (mysql_query("CREATE DATABASE primeraBase",$conexion)) {
		echo "Se ha creado la base de datos";
	}
	else{
		echo "No se ha creado la base de datos";
	}
	*/

	// Preparo esta peticio
	mysql_select_db("primeraBase",$conexion);
	$sql = "CREATE TABLE Agenda
	(
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int
	)";

	// Ejecuto esta peticion
	mysql_query($sql,$conexion);

    // Cerrar la conexion
	mysql_close($conexion);

?>