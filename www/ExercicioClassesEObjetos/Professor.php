<?php

class Professor {
    public $nome;
    public $turma;
    public $dataNascimento;
    public $registro;

    public function retornaDados() {
        return "$this->nome $this->turma $this->dataNascimento $this->registro";
    }
}