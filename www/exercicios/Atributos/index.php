<?php

require_once('Livro.php');

$php = new Livro();
$php->titulo = "Como programar POO";
$php->nomeAutor = "Renan";
$php->numeroEdicao = 524;
$php->numeroLivro = 100523654789;

print_r($php->retornaDados());
