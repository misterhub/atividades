<?php
echo "<center>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo '<BODY BACKGROUND="http://www.contabilsantarita.com.br/fundo/fundo00.jpg">';

echo '<span style="color:#FE0501"><b>Hora certa: </span><b/>';
echo '<meta http-equiv="refresh" content="1">';

date_default_timezone_set("Brazil/East");

$horaAtual = getdate ();
echo $horaAtual["hours"] -1; 
echo ":";
echo $horaAtual["minutes"];
echo ":";
echo str_pad($horaAtual["seconds"], 2, "0", STR_PAD_LEFT);
echo "<br/>";

echo '<span style="color:#00FF09"><b>Dia da Semana: </span><b/> ';
$dataAtual = getdate();
switch ($dataAtual["wday"]){
		case 0: 
		echo "Domingo";
		break;
		case 1: 
		echo "Segunda-Feira";
		break;
		case 2: 
		echo "Terça-feira";
		break;
		case 3: 
		echo "Quarta-feira";
		break;
		case 4: 
		echo "Quinta-feira";
		break;
		case 5: 
		echo "Sexta-feira";
		break;
		case 6: 
		echo "Sábado";
}
echo "<br/>";
echo '<span style="color:#ABCDEF"><b>Data Atual: </span><b/> ';
echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo "<br/>";
?>


