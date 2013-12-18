<?php
echo "<center/>";

$textoInicio = 0 ;
$textoFim = 0 ;

$textoInicio = $_POST["textoInicio"];
$textoFim = $_POST["textoFim"];

$textoInicio = explode("/", $textoInicio);
$textoFim = explode("/", $textoFim);

$tempoInicio = mktime (0, 0, 0, $textoInicio[0], $textoInicio[1], $textoInicio[2]);
$tempoFim = mktime (0, 0, 0, $textoFim[0], $textoFim[1], $textoFim[2]);

$tempoAtual = time();
$dataAtual = date('d/m/Y', $tempoAtual);


if($tempoAtual >= $tempoInicio and $tempoAtual <= $tempoFim){
	echo '<span style="color:#008080"><b>Hoje é dia bom para você gastar</span><b/>';
}

else{
	echo '<span style="color:#FF0000"><b>Hoje não é dia bom para você gastar</span><b/>';
}


?>



