<?php


echo 'Convertendo Fahrenheit para Celsius '.PHP_EOL;

$fahr = readline('Informe a temperatura: ');
$cel = (($fahr - 32) * 5)/9;

echo 'Resultado: '.$cel;
