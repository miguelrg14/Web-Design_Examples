<?php 

$personas = ['11111A' => "Juan",
			 '22222B' => "Eva",
			 '33333C' => "María",
			 '44444D' => "Andrés",
			 '55555E' => "Ernesto",
			 '66666F' => "Pedro",
			 '77777G' => "Federico"];


//Leemos las claves y los valores del array
foreach ($personas as $dni => $nombre) {
	echo "La persona: $nombre tiene el dni: $dni<br>";
}

//Añadimos un nuevo elemento
$personas['88888H'] = "Gloria";

echo "<br><br>";

//Mostramos de nuevo los valores
foreach ($personas as $dni => $nombre) {
	echo "La persona: $nombre tiene el dni: $dni<br>";
}