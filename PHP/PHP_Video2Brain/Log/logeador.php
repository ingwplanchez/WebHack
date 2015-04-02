<?php
	$archivo = "logs.dat";
	@$ip = getenv(REMOTE_ADDR); // Determinar ip del visitante
	$navegador = $_SERVER["HTTP_USER_AGENT"];

	// U = Tiempo universal, Y = año, m = mes, d = dia, H = hora, i = minuto, s = segundo
	$contenido = date('U')."|".date("Y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";

	$manejador = fopen($archivo,'a+');
	fwrite($manejador,$contenido);	
?>