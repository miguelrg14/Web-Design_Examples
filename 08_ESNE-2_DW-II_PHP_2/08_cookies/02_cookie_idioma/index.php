<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Idioma con Cookies</title>
</head>
<body>
	<?php
	//Comprobamos si existe Cookie que indique el idioma
	if (isset($_COOKIE["idioma"])) {
		// Si la Cookie existed derivamos a la pág correspondiente
		switch ($_COOKIE["idioma"]) {
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
	}
?>

	<!-- Si llegamos hasta aquí es que no hemos seleccionado nunca un idioma -->
	<!-- Mostramos formulario con selector de idioma y enviamos por POST-->
	<h2>No hay cookie para selección de idioma. Seleccione idioma</h2>
	<form action="procesar.php" method="POST">
		<input type="radio" name="idioma" value="es" checked>Español <br>
		<input type="radio" name="idioma" value="in">Inglés <br>
		<input type="radio" name="idioma" value="fr">Francés <br>

		<input type="submit" name="Acceder">
	</form>

</body>
</html>