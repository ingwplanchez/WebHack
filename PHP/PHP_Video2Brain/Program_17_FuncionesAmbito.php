<?php
	$variable = "hola";

	function hola(){
		global $variable; // Usar variable global declarada fuera de la funcion
		echo $variable;
	}
	hola();
?>