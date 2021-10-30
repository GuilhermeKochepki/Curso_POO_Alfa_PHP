<?php
require_once('Endereco.php');
require_once('Usuario.php');

$nome = "Renan";
$idade = 26;
$usuario = new Usuario("Renan", $idade);
$usuario->saldoAtual = 50.5;


print_r($usuario);