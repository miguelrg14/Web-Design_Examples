<?php 

$n1 = 0;
$n2 = 1;

for ($i=0; $i < 20; $i++) { 
	$suma = $n1 + $n2;
	$n1 = $n2;
	$n2 = $suma;

	echo $suma . " ";
}