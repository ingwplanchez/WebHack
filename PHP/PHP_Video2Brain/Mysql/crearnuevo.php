<?php
	// Establecer conexxion
	$conexion = mysql_connect("localhost","rootphp","toor");
	if (!$conexion) {
		die(mysql_error());
	}
	// Seleccion de la base de datos
	mysql_select_db("agenda",$conexion);

	// Insercion de datos 
	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
	VALUES('Dainerys','Targayen','20','0412')");
	mysql_close();

?>