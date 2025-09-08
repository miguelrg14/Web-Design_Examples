<?php
class Animal {
	private $nombre;
	private $edad;
	function __construct($nombre, $edad) {
		$this->nombre = $nombre;
		$this->edad = $edad;        
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function getEdad() {
		return $this->edad;
	}
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setEdad($edad) {
		$this->edad = $edad;
	}
	public function __toString() {
		return "Animal: " . $this->nombre . "; ". $this->edad." años";
	}
}
class Perro extends Animal{
	private $raza;
	private $vacuna=null;
	
	function __construct($nombre, $edad, $raza){	
		 parent::__construct($nombre, $edad);
		 $this->raza = $raza;
	}

	public function getRaza(){
		return $this->raza;
	}

	public function setRaza($raza){
		$this->raza = $raza;
	}

	public function Vacunar(){
		if($this->raza = "Doberman"){
			$this->vacuna = "Vacuna 1";
		}else{
			if($this->edad<3){
				$this->vacuna = "Vacuna 2";
			}else{
				$this->vacuna = "Vacuna 3";
			}
		}
	}

	public function getVacuna(){
		return $this->vacuna;
	}

	public function setVacuna($vacuna){
		$this->vacuna = $vacuna;
	}

	public function __toString(){
		return  "Perro: ". $this->getNombre(). "; ". $this->GetEdad()." años"."; raza:  ".$this->raza."; vacuna: ".$this->vacuna;
	}      
}

class Periquito extends Animal{
	private $color;
	
	function __construct($nombre, $edad, $color){	
		 parent::__construct($nombre, $edad);
		 $this->color = $color;
	}
	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color = $color;
	}

	public function __toString(){
		return  "Periquito: ". $this->getNombre(). "; ". $this->GetEdad()." años"."; color:  ".$this->color;
	}      
}

// crear una persona
$a1 = new Animal("Firulais", 2);
// mostrarla, usa el método __toString()
echo $a1 . "<br>";

$p1 = new Perro("Pizza", 1,"Doberman");
$p1->Vacunar();

echo $p1. "<br>";

$p2 = new Periquito("Koopa", 2,"rojo");
echo $p2. "<br>";
 