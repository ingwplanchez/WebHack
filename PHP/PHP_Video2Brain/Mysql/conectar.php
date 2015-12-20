<?php
	$conexion = mysql_connect("localhost","rootphp","toor");

	if (!$conexion) {
		die('No he podido conectar: '.mysql_error());
	}

    // Cerrar la conexion
	mysql_close($conexion);

?>