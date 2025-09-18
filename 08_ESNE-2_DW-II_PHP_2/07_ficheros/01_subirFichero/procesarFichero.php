<?php
echo "<br>";
echo "<br>";

$res = move_uploaded_file($_FILES["fichero"]["tmp_name"],  "subidos/" . $_FILES["fichero"]["name"]);

if ($res){
	echo "<br>Fichero guardado...";
} else {
	echo "<br>Error...";
}
