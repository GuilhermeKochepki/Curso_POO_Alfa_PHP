<?php

class Pessoa
{
    public $nome;
    public $cpf;
    public $endereco;
    public $dataNascimento;
    public $emprego;
    public $sexo;
    private $email;
    protected $cargo;


    //public acessa o método
    //function define que é um método
    //comer 
    public function comer($fome) {
        if($fome == true) {
            return "Vou comer";
        }
        return "Não estou com fome agora";
    }

    public function pular() {
        return "Estou pulando";
    }

    public function retornarDadosPessoa() {
        return "Meu nome é: $this->nome . 
         Minha data de nascimento é: $this->dataNascimento 
         E meu cpf é: $this->cpf";
    }

    public function retornarEmailPessoa() {
        $this->email = "renan.professor@gmail.com";
        return $this->email;
    }

    public function retornarCargo($cargo) {
        $this->alteraCargo($cargo);
        return $this->cargo;
    }

    public function alteraCargo($cargo) {
        $this->cargo = $cargo;
    }
}