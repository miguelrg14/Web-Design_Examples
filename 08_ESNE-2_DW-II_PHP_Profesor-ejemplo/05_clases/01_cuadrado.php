<?php 

/**
 * Clase cuadrado
 */
class Cuadrado
{
	private $lado;
	private $color;

	function __construct($l = 0, $c = "sin definir"){
		$this->setLado($l);
		$this->setColor($c);
	}
	public function setLado($lado){
		$this->lado = $lado;
	}
	public function getLado () {
		return $this->lado;
	}
	public function setColor($color){
		$this->color = $color;
	}
	public function getColor () {
		return $this->color;
	}
	public function getArea() {
		return $this->lado * 4;
	}
	public function __toString(){
		//return "Su lado es " . $this->getLado() . " y su color es " . $this->getColor();
		return "Su nombre es " . get_class($this);
	}
}




// Código de ejemplo
$fig1 = new Cuadrado(22, 'Amarillo');
$fig2 = new Cuadrado();
//$fig1->setLado(10);
echo $fig1->getLado();
echo "<br>";
echo $fig1->getArea();
echo "<br>";
echo $fig1->getColor();
echo $fig1;
echo $fig2;