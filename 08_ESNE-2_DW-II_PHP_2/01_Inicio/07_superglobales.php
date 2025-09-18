<?php 
echo "<h1>VARIABLES SUPERGOBALES</h1>";

// Superglobales
echo '<h2>Ejemplos de valores de $_SERVER</h2>';

echo "Ruta dentro de htdocs: " . $_SERVER['PHP_SELF'];
echo "<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo "Método de la petición: " . $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "<br>";

echo '<h1>$_SERVER</h1>';
print_r($_SERVER);
echo "<br>";
echo "<br>";
