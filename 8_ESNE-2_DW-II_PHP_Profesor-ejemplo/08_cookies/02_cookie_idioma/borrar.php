<?php
	//Eliminamos la cookie
	setcookie("idioma");
	//Redireccionamos a página principal 
	//para seleccionar idioma de nuevo
	header("Location:index.php");