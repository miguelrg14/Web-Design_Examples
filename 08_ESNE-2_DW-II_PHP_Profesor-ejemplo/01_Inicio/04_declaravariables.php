<?php 
echo "<h1>Variables</h1>";

// Declaración de variables
$entero = 4; //tipo integer
$numero = 4.5; //tipo coma flotante
$cadena = "cadena"; //tipo cadena de caracteres
$bool = TRUE; //tipo booleano

// Imprimo variables
echo "El valor de la variable entero es: " . $entero;
echo "<br>";
echo "El valor de la variable numero es: " . $numero;
echo "<br>";
echo "El valor de la variable cadena es: " . $cadena;
echo "<br>";
echo "El valor de la variable bool es: " . $bool;
echo "<br><br>";	


// Cambio de tipo de una variable
echo "<h2>Ejemplo de cambio de tipo de variable</h2>";
$a = 5; //tipo entero
echo gettype($a); //imprime el tipo de dato de a
echo "<br>";
$a = "Hola";
echo gettype($a); //imprime el tipo de dato de a

echo "<h1>Declaración de constantes</h1>";

// Declaración de constante
define("MAX", 1000);
define("MIN", 1);

echo "El límite superior es " . MAX;
echo "<br>";
echo "El límite inferior es " . MIN;
echo "<br><br>";

// comillas dobles y simples
$nombre = "Pepito";
echo "Hola $nombre";
echo "<br>";
echo 'Hola $nombre';
