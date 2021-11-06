<?php

require_once('Eletrodomestico.php');
require_once('Liquidificador.php');
require_once('Tv.php');

$tv = new Tv();
print_r($tv->ligar());
print_r($tv);

print_r($tv->desligar());
print_r($tv);
