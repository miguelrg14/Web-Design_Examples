<!-- Definición de función factorial recursiva-->

<?php
function factorial($num) {
	if ($num == 1) 
		return 1;
	else 
		return $num * factorial($num - 1);
}

// imprimimos cálculo
echo "El factorial de " . $_POST["num"] . " es: " . factorial($_POST["num"]);
echo "<br><br>";
echo "<a href='index.html'>Volver...</a>";