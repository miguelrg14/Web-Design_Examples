<!-- Ejemplo números primos -->

<!-- Programa que muestra los números primos entre 1 y MAX -->

<!DOCTYPE html>
<html>
<head>
	<title>Primos</title>
</head>
<body>
	<h1>Números primos entre 1 y la constante MAX</h1>
	<hr>

	<?php

	define("MAX", 1000); // definimos MAX como constante

	//definimos función que devuelve true si el número es primo
	function es_primo(int $numero){ 
		for ($i=2; $i < $numero; $i++) { 
			if ($numero % $i == 0) {
				return false;
			}
		}
		return true;
	}

	echo "2 <br>"; //imprimimos el 2 manualmente

	//recorremos rango de números y evaluamos si es primo o no
	for ($i=3; $i <= MAX; $i+=2) { 
		if (es_primo($i)) { echo "$i <br>";}
	}

?>
</body>
</html>