<?php
	class Persona{
		public $nombre;
		public $edad;

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}

		public function __toString(){
			return "Hola, tu nombre es {$this->nombre} y tienes {$this->edad} años de edad";
		}

		public function getNombre(){
			return $this->nombre;
		}
	
		public function getEdad(){
			return $this->edad;
		}
	}

	$enr = new Persona();
	$enr->setNombre("Beto Treviño");
	$enr->setEdad(8);
	echo $enr;
?>