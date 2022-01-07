<?php
/*
	Un trait es un mecanismo de reutlizacion de codigo que nos permite
	compartir un metodo entre varias clases sin recurrir a la herencia.
	Se utiliza la palabra reservada trait para declararla y use para utilizarla en esa clase
*/

	trait Utilidades{
		public function mostrarNombre(){
			echo "<h2>El nombre es ".$this->nombre."<br>";
		}
	}

	class Perro{
		private $nombre;
		private $raza;

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		use Utilidades;
	}

	class Persona{
		private $nombre;
		private $apellido;

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		use Utilidades;
	}
	
	class Empresa{
		private $nombre;
		private $RFC;

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
	}

	$perro1 = new Perro();
	$perro1->setNombre("Jacobo");
	echo $perro1->mostrarNombre();

	$persona1 = new Persona();
	$persona1->setNombre("Luis Enrique");
	echo $persona1->mostrarNombre();

	$empresa1 = new Perro();
	$empresa1->setNombre("Empresas Patito S.A. de C.V.");
	echo $empresa1->mostrarNombre();
	
?>