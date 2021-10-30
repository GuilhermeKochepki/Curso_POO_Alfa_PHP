<?php

class Aluno {
    public $nome;
    public $turma;
    public $dataNascimento;
    public $ra;

    public function retornaDados() {
        return "$this->nome $this->turma $this->dataNascimento $this->ra";
    }
}