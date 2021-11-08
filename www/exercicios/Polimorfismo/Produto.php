<?php

abstract class Produto {
    private float $valor;

    protected function setValor($valor){
        $this->valor = $valor;
    }

    public function precoProduto(){
        return $this->valor;
    }

}