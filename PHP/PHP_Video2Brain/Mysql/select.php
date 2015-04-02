<?php
	// realizamos la conexion
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	// Estructura de control por si falla la conexion
	if(!$conexion){
		die("No se ha podido establecer la conexion por: ".mysql_error());
	}

	mysql_select_db("agenda",$conexion); // Selecciono la base de datos

	// Pido todos los elementos de la tabla miagenda
	// Realizo la peticion
	$peticion = mysql_query("SELECT * FROM miagenda"); 
    
    // Listo los elementos de la base de datos
	while ($fila = mysql_fetch_array($peticion)) {
		echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
		echo "<br>";
	}

	mysql_close();

?>