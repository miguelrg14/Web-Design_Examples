<?php 

define ('MIN', 0);
define ('MAX', 10);

$var = rand(MIN, MAX);

echo '<h1>El valor de $var' . " es $var</h1>";

if ($var % 2) {
	echo "Es impar";
	echo "<br>";
	echo "Su mitad es: " . $var / 2;
} else {
	echo "Es par";
	echo "<br>";
	echo "Su doble es: " . $var * 2;
}
