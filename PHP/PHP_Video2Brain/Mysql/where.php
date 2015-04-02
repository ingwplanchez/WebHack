<?php
	// Realizamos la conexion
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	// En caso de error muestra un mensaje
	if (!$conexion) {
		die(mysql_error());
	}

	// Seleccion de la base de datos
	mysql_select_db("agenda",$conexion);

	// Peticion de un elemento especifico en la agenda
	$peticion = mysql_query("SELECT * FROM miagenda WHERE Nombre = 'Wilmer'");

	// Listar elementos que coincidan con la peticion
	while ($fila = mysql_fetch_array($peticion)) {
		echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
		echo "<br>";
	}

	mysql_close();

?>