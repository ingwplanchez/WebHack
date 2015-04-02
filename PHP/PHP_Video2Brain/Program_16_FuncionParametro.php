<?php
// Con esta funcion se prepara la tabla de multiplicar
	function miTabla($numero){
		for ($i=0; $i < 10 ; $i++) { 
			echo $numero." x ".$i." = ".$numero*$i."<br>";
		} // Fin del for
	} // Fin de la funcion

// Con este for se calculan todas las tablas
	for ($parametro=0; $parametro < 10 ; $parametro++) { 
		echo "Tabla del ".$parametro."<br>";
		miTabla($parametro);
	}
?>