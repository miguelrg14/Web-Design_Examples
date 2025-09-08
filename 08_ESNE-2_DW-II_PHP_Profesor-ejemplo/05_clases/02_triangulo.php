<?php 

/**
 * Clase triángulo
 */
class Triangulo
{
	private $base;
	private $altura;

	function __construct($b = 0, $a = 0){
		$this->setBase($b);
		$this->setAltura($a);
	}
	public function setBase($base){
		$this->base = $base;
	}
	public function getBase () {
		return $this->base;
	}
	public function setAltura($altura){
		$this->altura = $altura;
	}
	public function getAltura () {
		return $this->altura;
	}
	public function getArea() {
		return ($this->base * $this->altura) / 2;
	}
	public function __toString(){
		$result = "Datos Triángulo<br>";
		$result = $result . "***************<br>";
		$result = $result . "Su nombre es " . get_class($this) . "<br>";
		$result = $result . "Su base es " . $this->base . "<br>";
		$result = $result . "Su altura es " . $this->altura . "<br>";
		$result = $result . "Su área es " . $this->getArea();

		return $result;
	}
}




// Código de ejemplo
$fig1 = new Triangulo(10, 20);
echo $fig1;
