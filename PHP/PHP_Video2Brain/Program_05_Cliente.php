<?php
	@$tuip = getenv(REMOTE_ADDR);
	echo "Tu IP es: ".$tuip;

	$tunavegador = $_SERVER["HTTP_USER_AGENT"];
	echo"<br>";
	echo "Tu navegador es: ".$tunavegador;
?>