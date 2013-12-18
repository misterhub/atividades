<?php
$codigo = 0;
$codigo = $_POST["codigo"];
switch ($codigo){

	case 1:
		echo "O produto caneta = 1.20";
		break;
	
	case 2:
		echo "O produto lapis = 0.80";
		break;

	case 3:
		echo "O produto caderno = 4.50";
		break;

	default: 
		echo "Produto nao encontrado";




}



?>
