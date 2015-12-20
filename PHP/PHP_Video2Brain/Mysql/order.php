<?php
	// Establecer conexion
	$conexion = mysql_connect("localhost","rootphp","toor");
	if (!$conexion) {
		die(mysql_error());
	}

	mysql_select_db("agenda",$conexion);
	// Peticion de los elementos por edad y ordenarlos de forma Descendente
	$peticion = mysql_query("SELECT * FROM miagenda ORDER BY Edad DESC");

	// Listar elementos que coincidan con la peticion
	while($fila = mysql_fetch_array($peticion)){
		echo $fila['Nombre'];
		echo " ";
		echo $fila['Apellido'];
		echo " ";
		echo $fila['Edad'];
		echo " ";
		echo $fila['Telefono'];
		echo "<br>";
	}

	mysql_close();
?>