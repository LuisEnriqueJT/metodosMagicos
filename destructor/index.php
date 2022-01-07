<?php
	/*
	Un destructor es un metodo que elimina el objeto cuando se termina
	la ejecucion de la pagina.
	*/
	class Persona{
		public function __construct(){
			//No se recomienda imprimir en el constructor
			//esto solo se hace con cuestiones didacticas
			echo "Aqui se construye un objeto<br>";
		}

		public function __destruct(){
			echo "Aqui se destruye el objeto pues ya no será invocado";
		}
	}

	$persona = new Persona();

	for ($i=1; $i <25 ; $i++) { 
		// code...
		echo $i."<br>";
	}
?>