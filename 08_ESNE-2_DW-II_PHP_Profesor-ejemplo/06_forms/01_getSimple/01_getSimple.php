<?php 

// Ejemplo básico de paso de parámetros por GET

if (empty($_GET["nombre"])) {
	echo "Falta el parámetro nombre";
} else {
	echo "Hola " . $_GET["nombre"];
}

