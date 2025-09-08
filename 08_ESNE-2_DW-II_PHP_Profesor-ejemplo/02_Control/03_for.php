<?php 

//Ejemplo sencillo bucle for
echo "<h2>Contador sencillo entre MIN y MAX</h2>";
define ('MIN', 3);
define ('MAX', 100);

for ($cont=MIN; $cont <= MAX ; $cont++) { 
	echo "$cont<br>";
}


//Múltiplos de MULTIPLO entre 0 y MAX
echo "<h2>Múltiplos de  entre MIN y MAX</h2>";
define("MULTIPLO", 3);
for ($cont=0; $cont <= MAX ; $cont++) { 
	if ($cont % MULTIPLO == 0) {
		echo "$cont<br>";
	}
}


//Bucle for anidado
define("INTERNO", 10);
define("EXTERNO", 3);

echo "<h2>Bucle for anidado</h2>";
for ($i=0; $i <= EXTERNO ; $i++) { 
	for ($j=0; $j < INTERNO; $j++) { 
		echo "Bucle externo $i, Bucle interno $j<br>";
	}
}


//Tabla de multiplicar del NUM

define("NUM", 7);

echo "<h2>Tabla de multiplicar del " . NUM . "</h2>";
for ($i=0; $i <= 10 ; $i++) { 
		echo NUM . " * $i = " . NUM * $i . "<br>";
}


//Tabla de multiplicar de los primeros 10 números
echo "<h2>Bucle for anidado</h2>";
for ($i=1; $i <= 10 ; $i++) { 
	echo "<h2>Tabla del $i</h2>";
	for ($j=0; $j <= 10; $j++) { 
		echo "$i * $j = " . $i * $j . "<br>";
	}
}
