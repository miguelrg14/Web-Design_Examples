<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Temperaturas Semanales (Sin formato)</title>
</head>
<body>
	<h1>Temperaturas semanales (Sin formato)</h1>

	<?php 
		//Cargamos valores en array bidimensional
		for ($dias=1; $dias <= 7; $dias++) { 
			for ($t=1; $t <= 4; $t++) { 
				$valores[$dias][$t] = rand(-10, 50);
			}
		}
		//print_r($valores);
	 ?>

	<table border=1>

	  	<?php 
	    //Mostramos valores del array
   		for ($dias=1; $dias <= 7; $dias++) {
			echo "<tr>"; 
			for ($t=1; $t <= 4; $t++) { 
				echo "<td>" . $valores[$dias][$t] . "</td>";
			}
			echo "</tr>";
		}		
		 ?>

	</table>
</body>
</html>
