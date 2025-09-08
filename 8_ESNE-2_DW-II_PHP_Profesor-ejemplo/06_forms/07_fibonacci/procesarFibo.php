<!-- Cálculo de serie de Fibonacci-->
<!DOCTYPE html>
<html>
<head>
	<title>Serie de Fibonacci</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Cálculo de Serie de Fibonacci</h1>
	<hr>
	<br><br>

	<table border="1" style="text-align: center; margin: 0 auto;">
		<tr bgcolor="#AAA">
			<th width="100px" style="text-align: center;"># Elemento</th>
			<th width="150">Serie</th>
		</tr>
		<?php
			$n1 = -1;
			$n2 = 1;
			$suma = $n1 + $n2;

			if (isset($_POST['numero'])) { //Mostramos valores usando el primer criterio
				$max = $_POST['numero'];

				for ($x=1; $x<=$max; $x++) { //recorremos valores a mostrar

				 	if ($x % 2 == 0) { //aprovechamos valor de $x para alternar color de fila
				 		echo "<tr bgcolor='#CCC'>";	
				 	} 
				 	else {
				 		echo "<tr bgcolor='#FFF'>";
				 	}

				 	$suma = $n1 + $n2;
					$n1 = $n2;
					$n2 = $suma;

				 	echo"<td><font color=''>$x</font></td>\n";
				 	echo"<td><font color=''>$suma</font></td>\n";

				 	echo "</tr>";
			 	}

			} else {  //Mostramos valores usando el segundo criterio
				$max = $_POST['tope'];
				$cont = 0;

				while ($suma < $max) {
					if ($cont % 2 == 0) { //aprovechamos valor de $x para alternar color de fila
				 		echo "<tr bgcolor='#CCC'>";	
				 	} 
				 	else {
				 		echo "<tr bgcolor='#FFF'>";
				 	}

				 	$suma = $n1 + $n2;
					$n1 = $n2;
					$n2 = $suma;

					$cont++;

				 	echo"<td><font color=''>$cont</font></td>\n";
				 	echo"<td><font color=''>$suma</font></td>\n";

				 	echo "</tr>";
				}
			}
		 ?>
	</table>

	<br><br>
	<a href='index.html'><strong>Volver...</strong></a>
</body>
</html>