<!-- Ejemplo formulario -->

<!-- Programa que procesa datos de formulario en el mismo archivo de envío -->

<?php
	// evaluamos si el formulario ha realizado el envío por POST
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["nombre"] == "abc" AND $_POST["contrasena"] == "123") {
			header("Location:bienvenido.html");
		}
		else {
			$err = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form en 1</title>
</head>
<body>
	<?php
		if (isset($err)) {
			echo "<p>Revise sus datos</p>";
		}
	?>

	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
		<input type="text" name="nombre" id="nombre" value="<?php if(isset($_POST["nombre"])) echo $_POST["nombre"] ?>">
		<input type="password" name="contrasena">
		<input type="submit" name="logear">
	</form>

</body>
</html>