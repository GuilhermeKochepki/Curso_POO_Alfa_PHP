<?php

require_once('Calculadora.php');

$php = new Calculadora(5, 4.8);
echo ($php->somar());
echo '<br>' . ($php->subtrair());
echo '<br>' . ($php->multiplicar());
echo '<br>' . ($php->dividir());
