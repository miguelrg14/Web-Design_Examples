<!-- Ejemplo GET -->

<!-- Programa que accede a los valores de un formulario pasado por GET -->

<?php
	echo "El valor del primer campo es: " . $_GET["valor1"];
	echo "<br>";
	echo "El valor del segundo campo es: " . $_GET["valor2"];
	echo "<br>";
	echo "El valor del tercer campo es: " . $_GET["valor3"];
	echo "<br>";

	print_r($_GET);
?>

