<?php 
/**
 * Declaramos Clase Persona
 */
class Persona
{
	private $DNI;
	private $nombre;
	private $apellido;
	
	function __construct($DNI = "Sin DNI", $nombre = "Sin nombre", $apellido = "Sin apellido")
	{
		$this->DNI = $DNI;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	public function __toString() {
		return "Persona: " . $this->nombre . " " . $this->apellido . "</br>";
	}
}

/**
 * Declaramos la clase Cliente
 */
class Cliente extends Persona
{
	private $saldo = 0;

	function __construct($DNI, $nombre, $apellido, $saldo = 0)
	{
		parent::__construct($DNI, $nombre, $apellido);
		$this->saldo = $saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function __toString(){
		$resul = "Cliente: " . $this->getNombre();
		$resul .= "<br>" . "Saldo: " . $this->getSaldo() . "<br>";
		return $resul;
	}
}

//Cremos objetos a partir de las clases definidas

$per1 = new Persona();
echo $per1;
$per2 = new Persona('12387645G', 'Ernesto', 'Pérez López');
echo $per2;
//Modificamos el apellido
$per2->setApellido('Gutiérrez Sánchez');
echo $per2;

$per3 = new Persona('87637489F', 'Jose');
echo $per3;

$cli1 = new Cliente('87638746H', 'Claudia', 'López Ferrero');
echo $cli1;

