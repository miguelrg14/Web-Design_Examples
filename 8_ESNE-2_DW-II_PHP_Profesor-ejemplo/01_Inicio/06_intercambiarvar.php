<?php 
// Programa que intercambia el valor de dos variables

$var1 = 10;
$var2 = 35;

echo "La variable var1 es: " . $var1;
echo "<br>";
echo "La variable var2 es: " . $var2;
echo "<br>";
echo "<br>";

echo "<h2>Intercambiamos valores</h2>";
echo "<br>";

$aux = $var1;
$var1 = $var2;
$var2 = $aux;

echo "Ahora la variable var1 es: " . $var1;
echo "<br>";
echo "Ahora la variable var2 es: " . $var2;
