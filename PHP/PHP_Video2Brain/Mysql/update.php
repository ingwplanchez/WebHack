<?php
	$conexion = mysql_connect("localhost","rootphp","toor");

	if(!$conexion){
		die("no he podido conectar por la siguiente razon".mysql_error());
	}

	mysql_select_db("agenda",$conexion); // Selecccion de la base de datos
	mysql_query("UPDATE miagenda SET Edad = '24' WHERE Nombre='Dainerys' AND Apellido ='Targayen'");
	mysql_close();
?>