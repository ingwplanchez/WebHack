<?php
	$conexion = mysql_connect("localhost","rootphp","toor");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

	// Creacion de una base de datos

	if (mysql_query("CREATE DATABASE agenda",$conexion)) {
		echo "Se ha creado la base de datos";
	}
	else{
		echo "No se ha creado la base de datos";
	}
	

	// Preparo esta peticion
	mysql_select_db("agenda",$conexion); // Seleccion de la base de datos
	// Se crea la tabla y los registros
	$sql = "CREATE TABLE miagenda 
	(
	personaID int NOT NULL AUTO_INCREMENT,PRIMARY KEY(personaID),
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