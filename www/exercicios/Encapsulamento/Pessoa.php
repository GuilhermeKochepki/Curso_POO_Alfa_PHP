<?php

class Pessoa {
    private string $nome; 
    private string $cpf; 
    private int $idade; 
    private DateTime $dataNascimento;

    public function __construct(string $nome, string $cpf, int $idade, DateTime $dataNascimento){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->dataNascimento = $dataNascimento;
    }

    public function alistamento() : bool {
        return $this->idade <= 18;
    }

    public function setNome(String $nome){
        $this->nome = $nome;
    }

    public function setCpf(String $cpf){
        $this->cpf = $cpf;
    }
    
    public function setDataNascimento(DateTime $dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function setIdade(String $idade){
        $this->idade = $idade;
    }

    public function getNome() : String {
        return $this->nome;
    }
    
    public function getCpf() : String {
        return $this->cpf;
    }
    
    public function getIdade() : int {
        return $this->idade;
    }
    
    public function getDataNascimento() : DateTime {
        return $this->dataNascimento;
    }

}