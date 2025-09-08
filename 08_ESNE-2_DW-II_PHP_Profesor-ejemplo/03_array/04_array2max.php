<?php 

define('MAX', 10);
$valores = array();

//Rellenamos array con valores aleatorios
for ($i=0; $i < MAX; $i++) { 
	$valores[$i] = rand(1, 100);
}

//Mostramos valores del array y buscamos los dos mayores valores
if ($valores[0] > $valores[1]) {
	$max1 = $valores[0];
	$max2 = $valores[1];
	$min1 = $valores[1];
	$min2 = $valores[0];
} else {
	$max1 = $valores[1];
	$max2 = $valores[0];
	$min1 = $valores[0];
	$min2 = $valores[1];
}

/*
// Esta forma no siempre funciona
foreach ($valores as $key => $value) {
	echo "$value<br>";

	if ($value > $max1) {
		$max2 = $max1;
		$max1 = $value;
	} else if ($value > $max2) {
		$max2 = $value;
	}

	if ($value < $min1) {
		$min2 = $min1;
		$min1 = $value;
	} else if ($value < $min2) {
		$min2 = $value;
	}
}
*/
echo "$valores[0]<br>";
echo "$valores[1]<br>";
for($i = 2; $i < MAX; $i++) {
	echo "$valores[$i]<br>";

	if ($valores[$i] > $max1) {
		$max2 = $max1;
		$max1 = $valores[$i];
	} else if ($valores[$i] > $max2) {
		$max2 = $valores[$i];
	}

	if ($valores[$i] < $min1) {
		$min2 = $min1;
		$min1 = $valores[$i];
	} else if ($valores[$i] < $min2) {
		$min2 = $valores[$i];
	}
}


//Mostramos valores
echo "<br><br>";
echo "El mayor es $max1<br>";
echo "El segundo mayor es $max2";

echo "<br><br>";
echo "El menor es $min1<br>";
echo "El segundo menor es $min2";