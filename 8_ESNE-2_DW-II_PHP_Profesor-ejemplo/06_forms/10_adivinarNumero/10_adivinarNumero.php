 <!DOCTYPE html>
<html>

<head>
	<title>Adivina el número</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
	define("MAX", 2000);
	?>

	<fieldset>
		<legend>Adivina el número entre 1 y <?php echo MAX ?></legend>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<label>Introduzca un número:</label>
			<input type="text" name="numero" value="<?php if(isset($_POST["numero"])) echo $_POST["numero"] ?>">

			<input type="hidden" name="secreto" value="<?php if(isset($_POST["secreto"])) echo $_POST["secreto"]; else echo rand(1, MAX); ?>">

			<input type="hidden" name="intentos" value="<?php if(isset($_POST["intentos"])) echo $_POST["intentos"] + 1; else echo 1; ?>">

			<input type="submit" name="evaluar" value="Probar suerte">

			<a href="10_adivinarNumero.php">Volver a empezar</a>
		</form>
	</fieldset>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero = $_POST["numero"];

		 //echo "<br>El número secreto es: " . $_POST["secreto"];
		 //echo "<br>Intentos: " . $_POST["intentos"] . "<br>";

		if ($numero == $_POST["secreto"]) {
				echo "Acertaste !!!!" . "<br>";
				echo "Has necesitado " . $_POST["intentos"] . " intentos" . "<br>";
			} elseif ($numero > $_POST["secreto"]) {
				echo "Te pasaste..." . "<br>";
			} else {
				echo "Te quedaste corto..." . "<br>";
			}
	}
	?>
</body>
</html>