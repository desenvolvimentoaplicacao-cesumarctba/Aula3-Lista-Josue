<?php


echo 'Convertendo Fahrenheit para Kelvin'.PHP_EOL;

$fah = readline('Informe a temperatura: ');
$cel = (($fah - 32)* 5)/9;
$ken = $cel + 273.15;

echo 'Resultado: '.$ken;