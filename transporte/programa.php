<?php

$textoInicio = 0 ;
$textoFim = 0 ;

$textoInicio = $_POST["textoInicio"];
$textoFim = $_POST["textoFim"];

$textoInicio = explode("/", $textoInicio);
$textoFim = explode("/", $textoFim);

$tempoInicio = mktime (0, 0, 0, $textoInicio[0]), $textoInicio[1]), $textoInicio[2]);
$tempoFim = mktime (0, 0, 0, $textoFim[0]), $textoFim[1]), $textoFim[2]);



?>



