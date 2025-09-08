<?php
	// Comprobamos que la cookie existe
	if (isset($_COOKIE["idioma"])) {
		//Creamos variable con el idioma almacenado en la Cookie
		$idioma = $_COOKIE["idioma"];
	}
	else {
		//No existe la cookie. La creamos
		setcookie("idioma", $_POST["idioma"], time() + 3600 * 24);

		//Creamos variable con el idioma seleccionado en el formulario
		$idioma = $_POST["idioma"];
	}

	//Redirigimos según el idioma almacenado en $idioma
	switch ($idioma) {
		case 'es':
			header("Location:es.html");
			break;
		case 'in':
			header("Location:in.html");
			break;
		case 'fr':
			header("Location:fr.html");
			break;
		default:
			echo "Idioma no disponible";
			break;
	}





