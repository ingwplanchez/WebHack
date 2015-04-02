<?php
	class dimeAlgo{

		var $atributo;
		function dimeALgo($algo){ // Metodo constructor 
			$this->atributo = $algo;
			echo $this->atributo;
		}
	}
	$decir = new dimeAlgo("Hola");
?>