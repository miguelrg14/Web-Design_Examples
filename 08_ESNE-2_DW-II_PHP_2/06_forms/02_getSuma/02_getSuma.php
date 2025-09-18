<?php 

// Ejemplo de paso de parámetros por GET

if (empty($_GET["num1"]) || empty($_GET["num2"])) {
	echo "Faltan parámetros";
} else {
	echo "El primer número es " . $_GET["num1"];
	echo "<br>";
	echo "El segundo número es " . $_GET["num2"];
	echo "<br>";
	$suma = $_GET["num1"] + $_GET["num2"];
	echo "La suma de los dos números es: " . $suma;
	echo "<br>";
	echo "La resta de los dos números es: " . ($_GET["num1"] - $_GET["num2"]);
}