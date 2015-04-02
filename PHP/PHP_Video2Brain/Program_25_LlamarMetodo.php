<?php
	class saluda{
		
		function saludo(){
			echo "Yo saludo.";
		}

		function adios(){
			echo "Yo digo adios.";
		}
	}

	$instancia = new saluda();
	$instancia->adios();

?>