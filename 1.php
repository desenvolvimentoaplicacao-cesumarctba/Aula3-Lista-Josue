<?php


$tempo = readline('Tempo gasto de viagem: '.PHP_EOL);
$velo = readline('Velocidade média: '.PHP_EOL);

$dista = $tempo * $velo;
$lit_usado = $dista/12;

echo 'Velocidade Média foi: '.$velo.PHP_EOL;
echo 'Tempo gasto foi: '.$tempo.PHP_EOL;
echo 'Distancia foi: '.$dista.PHP_EOL;
echo 'Litros usados foi: '.$lit_usado.PHP_EOL;
