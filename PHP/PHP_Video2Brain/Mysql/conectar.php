<?php
	$conexion = mysql_connect("localhost","video2brain","video2brain");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

    // Cerrar la conexion
	mysql_close($conexion);

?>