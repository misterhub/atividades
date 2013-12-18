<?php
$media1 = 0;
$media2 = 0;
$media3 = 0;
$mediaConta = 0;
$mediaConsumo = 0;

$media1 = $_POST["media1"];
$media2 = $_POST["media2"];
$media3 = $_POST["media3"];

$mediaConta = ($media1+$media2+$media3)/3;
echo "Sua média da conta é R$ " . $mediaConta . "<br/>"; 

$mediaConsumo = ($mediaConta/2.50);
echo "Sua média de consumo é " . $mediaConsumo . "m³ <br/>";

echo "Aprevisão da sua próxima conta com o aumento da tarifa é de R$ " . ($mediaConsumo * 3.50);

?>
