<?php
	$archivo ="text.txt";
	$contenido = "Este es mi contenido";

	// Archivo a abrir, a+(escribir al final del texto)
	$manejador = fopen($archivo,'a+'); 

	// Sobreescribir el contenido
	//$manejador = fopen($archivo,'w+'); 
	
	// Escribir en el archivo
	fwrite($manejador,$contenido);
?>