<?php

class Conta
{
    private int $identificador;
    private float $saldo;
    private float $limite;

    public function __construct(float $saldo, int $identificador)
    {
        $this->saldo = $saldo;
        $this->identificador = $identificador;
    }

    public function sacar(float $valor)
    {
        if(!$this->verificaPermissaoSaque($valor))
        {
            throw new Exception("valor Excedido");
        }
        $this->saldo = $this->saldo - $valor;
    }

    public function depositar(float $valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function verificaPermissaoSaque(float $valor) : bool
    {
        $valorReal = ($this->limite + $this->saldo) - $valor;
        return $valorReal >= 0;
    }
}