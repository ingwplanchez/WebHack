<?php
	$conexion = mysql_connect("localhost","rootphp","toor");

	if(!$conexion){
		die("no he podido conectar por la siguiente razon".mysql_error());
	}

	mysql_select_db("agenda",$conexion); // Selecccion de la base de datos

	// Insercion de datos 
	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
	VALUES('Wilmer','Planchez','25','0426')");
	
	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
	VALUES('Rafael','Lugo','25','0414')");

	mysql_close($conexion);


?>