<?php

require_once('Pessoa.php');

$renan = new Pessoa();
$renan->nome = "Renan Zanelato";
$renan->cpf = "000.000.000-00";
$renan->dataNascimento = "26/01/1996";
$renan->emprego = "Professor";
$renan->sexo = "M";
$renan->endereco = "Rua Brasil";

print_r($renan);
echo "<br>";
print_r($renan->nome);
echo "<br>";
print_r($renan->sexo);
echo "<br>";
print_r($renan->retornarDadosPessoa());
echo "<br>";
print_r($renan->pular());
echo "<br>";
print_r($renan->comer(false));
echo "<br>";
print_r($renan->comer(true));
echo "<br>";
print_r($renan->retornarEmailPessoa());
echo "<br>";
print_r($renan->retornarCargo("maestro"));

