<?php

class Livro {
    public $titulo;
    public $nomeAutor;
    public $numeroLivro;
    public $numeroEdicao;

    public function retornaDados(){
        return "Titulo: $this->titulo 
        Autor: $this->nomeAutor 
        Numero do Livro: $this->numeroLivro 
        Numero Edição $this->numeroEdicao";
    }
}