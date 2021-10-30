<?php
require_once('Aluno.php');
require_once('Professor.php');

$guilherme = new Aluno();
$renan = new Professor();

$guilherme->nome = 'Guilherme';
$guilherme->dataNascimento = '10/07/2002';
$guilherme->turma = 'POO';
$guilherme->ra = '200653752';

$renan->nome = 'Renan';
$renan->turma = 'POO';
$renan->registro = '200875423';
$renan->dataNascimento = '22/05/1925';

echo '<br>';
print_r($guilherme->retornaDados());
echo '<br>';
print_r($renan->retornaDados());
