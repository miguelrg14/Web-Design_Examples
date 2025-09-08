<?php 

//Contar de 0 a MAX con un bucle while
echo "<h2>Contar de 0 a MAX</h2>";
$cont = 0;
define("MAX", 20);

while ($cont <= MAX) {
	echo "$cont<br>";
	$cont++;
}


//Contar de 0 a MAX y que imprima sólo los impares
// FORMA 1
echo "<h2>Contar impares de 0 a MAX</h2>";
$cont = 0;
while ($cont <= MAX) {
	if ($cont % 2 != 0) {
		echo "$cont<br>";
	}
	$cont++;
}

//Contar de 0 a MAX y que imprima solo los impares
// FORMA 2
$cont = 1;
while ($cont <= MAX) {
	echo "$cont<br>";
	$cont += 2;
}


//Tabla de NUM
define("NUM", 7);
echo "<h2>Tabla del " . NUM . "</h2>";
$cont = 0;
while ($cont <=10) {
	echo NUM . " * $cont = " . NUM * $cont;
	echo "<br>";
	$cont++;
}


// Bucle anidado con while
echo "<h2>Bucle anidado</h2>";
define("NUM2", 30);
$i = NUM2;

while ($i >= 0) {
	$j = $i;
	while ($j >= 0) {
		echo $j;
		if ($j != 0) {
			echo " - ";
		}
		$j--;
	}
	echo "<br>";
	$i--;
}


//Tabla de multiplicar de los NUM primeros números naturales
echo "<h2>Tablas de multiplicar </h2>";
define("M1", 5);
define("M2", 4);

$m1 = 1;
while ($m1 <= M1) {
	echo "<h3>Tabla del $m1</h3>";
	$m2 = 0;
	while ($m2 <= M2) {
		echo "$m1 * $m2 = " . $m1 * $m2 . "<br>";
		$m2++;
	}
	$m1++;
}

//Operaciones varias 
echo "<h2>Operaciones varias</h2>";
define("MAX2", 100);

$cont = 1;
$s_total = 0;
$s_par = 0;
$s_impar = 0;
$m7 = 0;

while ($cont <= MAX2) {
	$s_total += $cont;
	if ($cont%2 == 0) {
		$s_par += $cont;
	} else {
		$s_impar += $cont;
	}
	if ($cont%7 == 0) {
			$m7++;
	}
	$cont++;
}

echo "<h2>TOTALES</h2>";
echo "La suma total es: " . $s_total;
echo "<br>";
echo "Suma de pares: " . $s_par;
echo "<br>";
echo "Suma impar: " . $s_impar;
echo "<br>";
echo "Múltiplos de 7: " . $m7;
echo "<br>";
echo "La media es: " . $s_total / MAX2;
