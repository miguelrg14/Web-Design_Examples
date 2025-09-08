<!-- Cálculo de factorial usando un solo archivo -->
<!DOCTYPE html>
<head>
	 <title>Factorial en 1</title>
	 <meta charset="utf-8">
</head>
<body>
	<?php
	function factorial($numero){
		if($numero==1) return 1;
		else return $numero * factorial($numero-1); 
	}
	?>

	<h1>Factorial</h1>
	<hr>
	<br><br><br>
	
	<form action ="<?php $_SERVER["PHP_SELF"];?>" method="POST">
		<div style="width: 15%; float: left;">
			<fieldset>
				<legend><strong>Introduce un número</strong></legend>
				<br>
				<input type="number" name="numero" value="<?php if(isset($_POST["numero"])) echo $_POST["numero"]?>">
				<br><br>
				<input type="submit" value="Calcular"/>
			</fieldset>
		</div>

		<div style="width: 20%; float: left; margin-left: 50px;">
			<fieldset>
				<legend><strong>Resultado</strong></legend>
				<br>
				<input type="text" name="resultado" value="<?php if(isset($_POST["numero"])) echo factorial($_POST["numero"])?>" readonly>
				<br><br><br>
			</fieldset>
		</div>
	</form>
	
</body>
</html>