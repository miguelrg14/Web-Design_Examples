<?php 

function operar($n1=0, $n2=0, $op='+') {
	switch ($op) {
		case '+':
			return ($n1 + $n2);
			break;
		case '-':
			return ($n1 - $n2);
			break;
		case '*':
			return ($n1 * $n2);
			break;
		case '/':
		if ($n2 != 0) {
			return ($n1 / $n2);
		} else { return "No es posible realizar la división";}
			
			break;
		default:
			return "No es posible realizar la operación solicitada";
			break;
	}
}

$num1 = 10;
$num2 = 0;
$operacion = "/";

echo operar($num1, $num2, $operacion);