<?php

class Usuario {
    public string $nomeUsuario;
    public int $idadeUsuario;
    private Endereco $endereco;
    public DateTime $dataNascimento;
    public float $saldoAtual;

    public function __construct(string $nome, int $idadeUsuario) {
        $this->nome = $nome;
        $this->idadeUsuario = $idadeUsuario;
    }
                                                //tipagem de saída
    public function retornaSaldoAtualDoUsuario() : float {
        return $this->saldoAtual;
    }

    public function retornaEnderecoCliente() : string {
        return $this->endereco->retornarEndereco();
    }
}