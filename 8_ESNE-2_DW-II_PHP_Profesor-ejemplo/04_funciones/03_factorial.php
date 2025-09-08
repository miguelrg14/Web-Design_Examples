<?php 

function factorial($num){	
	$resul = 1;
	for ($i = 2; $i <= $num; $i++) { 
		$resul = $resul * $i;
	}
	return $resul;
}

function factorial2($num){	
	$resul = 1;
	for ($i = 1; $i <= $num; $i++) { 
		$resul = $resul * $i;

		if ($i < $num) {
			echo "$i x ";
		} else {
			echo $i;
		}

	}
	echo "<br>";
	return "Factorial de $num = $resul";
}

function factorial_r($num) {
	if ($num == 1) 
		return 1;
	else 
		return $num * factorial_r($num - 1);
}


echo "<h2>Factorial Simple</h2>";
echo factorial(4);
echo "<br>";
echo "<h2>Factorial Completo</h2>";
echo factorial2(4);
echo "<br>";
echo "<h2>Factorial Recursivo</h2>";
echo factorial_r(5);