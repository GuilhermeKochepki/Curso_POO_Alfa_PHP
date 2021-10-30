<?php

require_once('IMC.php');

$meuImc = new IMC(72.0,1.84,'M');

print_r($meuImc->calcularImc());
//if ($meuImc->imc == 0) {
//    $meuImc->calcularImc();
//}
echo '<br>';
echo $meuImc->retornarGrau();