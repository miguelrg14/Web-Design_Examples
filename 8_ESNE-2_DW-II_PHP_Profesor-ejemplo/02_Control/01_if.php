<?php 

$var = rand(-10, 10);

echo '<h1>El valor de $var' . " es $var</h1>";

//Ejemplo de if simple
echo "<h2>Ejemplo de if simple</h2>";
if ($var > 0) {
	echo 'La variable $var es positiva';
	echo "<br>";
} else {
	echo 'La variable $var es negativa';
}


//Ejemplo de elseif else
echo "<h2>Ejemplo de elseif</h2>";
if ($var == 0) {
	echo 'La variable $var es cero';
	echo "<br>";
} elseif ($var < 0) {
	echo 'La variable $var es negativa';
	echo "<br>";
} else {
	echo 'La variable $var es positiva';
	echo "<br>";
}

//Ejemplo de switch
echo "<h2>Ejemplo de switch</h2>";
switch ($var) {
	case 0:
		echo "El valor es cero";
		break;
	case 1:
		echo "El valor es uno";
		break;
	case 2:
		echo "El valor es dos";
		break;
	default:
		echo "El valor no es ni uno, ni dos, ni tres";
		break;
}