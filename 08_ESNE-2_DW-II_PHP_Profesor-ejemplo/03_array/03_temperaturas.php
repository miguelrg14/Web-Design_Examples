<?php 
//Almacenamos en un array las temperaturas para cada día de la semana
//Mostramos los valores diarios y calculamos MAX, MIN y MEDIA

$temperaturas = ['Lunes' => 10,
				 'Martes' => 22,
				 'Miércoles' => 30,
				 'Jueves' => 2,
				 'Viernes' => 50,
				 'Sábado' => 19,
				 'Domingo' => 20];

$max = $temperaturas['Lunes'];
$min = $temperaturas['Lunes'];
$acum = 0;


// Recorremos array y lo leemos
//Leemos los valores del array
foreach ($temperaturas as $temperatura) {
	if ($temperatura > $max) $max = $temperatura;
	if ($temperatura < $min) $min = $temperatura;
	$acum += $temperatura;
}

//Mostramos cálculos
echo "<br><br>";

echo "La temperatura máxima es: $max";
echo "<br>";
echo "La temperatura mínima es: $min";
echo "<br>";
echo "La temperatura media es: " . number_format($acum/count($temperaturas), 2);

echo "<br>";echo "<br>";




// Otra forma de hacerlo usando clave=>valor
$diaMAX = 'Lunes';
$diaMIN = 'Lunes';
$max = $temperaturas['Lunes'];
$min = $temperaturas['Lunes'];
$acum = 0;

// Recorremos array y lo leemos
//Leemos las claves y los valores del array
foreach ($temperaturas as $dia => $temperatura) {
	echo "$dia : $temperatura<br>";

	if ($temperatura > $max) {$diaMAX = $dia;}
	if ($temperatura < $min) {$diaMIN = $dia;}
	$acum += $temperatura;
}
	
//Mostramos cálculos
echo "<br><br>";

echo "La temperatura máxima fue el $diaMAX: $temperaturas[$diaMAX]";
echo "<br>";
echo "La temperatura mínima fue el $diaMIN: $temperaturas[$diaMIN]";
echo "<br>";
echo "La temperatura media es: " . number_format($acum/count($temperaturas), 2);

echo "<br>";echo "<br>";