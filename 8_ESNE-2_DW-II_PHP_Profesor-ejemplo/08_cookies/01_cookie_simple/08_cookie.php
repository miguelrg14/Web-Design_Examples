<!-- Ejemplo cookie -->

<!-- Programa que controla el número de visitas mediante cookies -->

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo cookies</title>
</head>
<body>
	<h1>EJEMPLO COOKIE</h1>
	<br><br>

	<?php

	if (!isset($_COOKIE["visitas"])) {
		setcookie("visitas", '1', time() + 3600 * 24);
		echo "Bienvenido por primera vez...";
		}
		else {
			$visitas = (int) $_COOKIE["visitas"];
			$visitas++;
			setcookie("visitas", $visitas, time() + 3600 * 24);
			echo "Bienvenido por $visitas vez...";
		}
?>
	<br><br>
	
	<form action="08_borrar_cookie.php" method="POST">
		<input type="submit" name="borrarCookie" value="Borrar Cookie">
	</form>

</body>
</html>