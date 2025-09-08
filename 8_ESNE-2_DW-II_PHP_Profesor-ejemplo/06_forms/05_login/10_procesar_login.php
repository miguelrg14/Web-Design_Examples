<?php
	$nombre = "abc";
	$contra = "123";

	if ($_POST["nombre"] == $nombre AND $_POST["contrasena"] == $contra) {
		header("Location:10_bienvenido.html");
	}
	else {
		header("Location:10_error.html");
	}