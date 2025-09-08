<!-- Ejemplo de subida de ficheros 
     Comprueba si es demasiado grande 
     Muestra los parámetros del archivo subido
     Lo mueve a carpeta 'subidos' -->

<?php
$tam = $_FILES["fichero"]["size"];
if ($tam > 256 * 1024){ //Comprobamos si el tamaño es mayor de 256 Kbytes
	echo"<br> Demasiado grande";
	return;
}
echo "Nombre del fichero: " . $_FILES["fichero"]["name"];
echo "<br>";
echo "Nombre temporal del fichero en el servidor: " . $_FILES["fichero"]["tmp_name"];
echo "<br>";
echo "Tamaño en bytes del fichero: " . $_FILES["fichero"]["size"];
echo "<br>";
echo "Tipo del archivo: " . $_FILES["fichero"]["type"];
echo "<br>";
echo "Código de error: " . $_FILES["fichero"]["error"];

echo "<br>";
echo "<br>";

$res = move_uploaded_file($_FILES["fichero"]["tmp_name"],  "subidos/" . $_FILES["fichero"]["name"]);

if ($res){
	echo "<br>Fichero guardado...";
} else {
	echo "<br>Error...";
}
