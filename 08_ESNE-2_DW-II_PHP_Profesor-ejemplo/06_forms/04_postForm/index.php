<!-- Ejemplo formulario simple -->

<!-- Programa que recoge en un formulario diferentes tipos de datos
	 y los muestra -->

<html>
	<body> 
		<h1>Ejemplo de formulario simple</h1>
		<br><br>
		<p>Introduzca los datos solicitados : </p>
		<br>
		<form name="formulario" method="POST" action="procesar_formulario.php" >
			<table width="50%">
				<tr>
					<td width="25%">Nombre</td>
					<td width="75%">
						<input name="nombre" type="text">
					</td>
				</tr>
				<tr>
					<td>Apellidos</td>
					<td><input name="apellidos" type="text"></td>
				</tr>
				<tr>
					<td>Correo</td>
					<td>
						<input name="correo" type="text">
					</td>
				</tr>
				<tr>
					<td>Nota</td>
					<td>
						<select name= "nota">
							<option value="Suspenso">Suspenso</option>
							<option value="Aprobado">Aprobado</option>
							<option value="Notable">Notable</option>
							<option value="Sobresaliente">Sobresaliente</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Horario</td>
					<td> Mañana <input name="horas" type="radio" value="Mañana" checked>
						 Tarde <input name="horas" type="radio" value="Tarde">
						 Noche <input name="horas" type="radio" value="Noche">
						 A distancia <input name="horas" type="radio" value="A distancia">
					</td>
				</tr>
				<tr>
				 	<td>Asignaturas</td>
				 	<td>
				 		Programación <input type="checkbox" name="asignaturas[]" value="Programación"><br>
				 		Diseño <input type="checkbox" name="asignaturas[]" value="Diseño"><br>
				 		Base de datos <input type="checkbox" name="asignaturas[]" value="Base de datos"><br>
				 		Redes  <input type="checkbox" name="asignaturas[]" value="Redes"><br>
				 	</td>
				</tr>
	 			<tr>
	 				<td>
	 					<input type="submit" name="Submit" value="Enviar">
	 				</td>
	 			</tr>
	 		</table>
	 	</form>
	 </body>
</html> 