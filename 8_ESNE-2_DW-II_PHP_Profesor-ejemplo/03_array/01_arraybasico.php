<?php 

$direcciones['11111A'] = "Juan";
$direcciones['22222B'] = "Eva";
$direcciones['33333C'] = "María";
$direcciones['44444D'] = "Andrés";
$direcciones['55555E'] = "Ernesto";
$direcciones['66666F'] = "Pedro";
$direcciones['77777G'] = "Federico";


// Creamos array enérico de nombres
$nombres = array ('Ana', 'Carlos', 'Eva', 'Juan');

print_r($nombres);

echo $nombres[2];
echo $nombres[1];

$nombres[] = 'Ernesto';

print_r($nombres);

// Recorremos array y lo leemos
define("MAX", 20);


for ($i=0; $i < MAX; $i++) { 
	$vector[] = 'Elemento ' . $i;
}

//Leemos sólamente los valores del array
foreach ($vector as $value) {
	echo "El valor es: " . $value;
	echo "<br>";
}

//Leemos las claves y los valores del array
foreach ($vector as $clave => $valor) {
	echo "La clave es: $clave y su valor es $valor<br>";
}