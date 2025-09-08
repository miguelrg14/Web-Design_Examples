<?php 

define('MAX', 10);
$valores = array();

//Rellenamos array con valores aleatorios
for ($i=0; $i < MAX; $i++) { 
	$valores[] = rand(-100, 100);
}

//Mostramos valores del array y buscamos los dos mayores valores
$num_pares = 0;
$sum_impares = 0;
$multi27 = 0;
$sum_pos = 0;
$num_pos = 0;
$sw = FALSE;

foreach ($valores as $key => $value) {
	if ($value % 2 == 0) {
		$num_pares++;
		if ($value % 7 == 0 && $value != 0) {
			$multi27++;
			$sw = TRUE;
		}
	} else {
		$sum_impares += $value;
	}

	if ($value > 0) {
		$num_pos++;
		$sum_pos += $value;
	}

	if ($sw) {
		echo "$value  *<br>";
		$sw = FALSE;
	}
	else echo "$value<br>";	
}

//Mostramos valores
echo "<br><br>";
echo "El número de pares es $num_pares<br>";
echo "La suma de los impares es $sum_impares<br>";
echo "La cantidad de múltiplos de 7 o de 2 es $multi27<br>";
echo "La suma de los positivos es $sum_pos<br>";
echo "La media de los positivos es " . number_format($sum_pos / $num_pos, 2);