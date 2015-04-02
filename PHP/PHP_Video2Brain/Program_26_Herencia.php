<?php
	class saluda{

		function saludo(){
			echo "Yo saludo.";
		}

		function adios(){
			echo "Yo digo adios.";
		}
	}

	class subsaluda extends saluda{ 
		function holadios(){}
	}

	$instancia = new subsaluda();
	$instancia->adios();

?>