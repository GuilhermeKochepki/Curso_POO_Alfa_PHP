<?php

require_once('Animal.php');

$aranha = new Animal();
$aranha->especie = 'Tarântula';
$aranha->andar = 'andar';

$golfinho = new Animal();
$golfinho->especie = 'Golfinho';
$golfinho->andar = 'nadar';

echo '<br>';
print_r($aranha->obterEspecie());
echo '<br>';
print_r($aranha->obterFormaDeAndar());
echo '<br>';
print_r($golfinho->obterEspecie());
echo '<br>';
print_r($golfinho->obterFormaDeAndar());