<!-- Procesado del formulario completo -->

<?php
foreach ($_POST as $indice => $valor) { 
	if ($indice != "asignaturas") echo "$indice: $valor<br>" ;
}

	echo "<br>ASIGNATURAS:<br>";
	$asignaturas = $_POST["asignaturas"];
	foreach ($asignaturas as $indice => $valor)
		{ echo "$indice: $valor<br>"; }


	echo "<br>PRUEBA:<br>";

	print_r($_POST);