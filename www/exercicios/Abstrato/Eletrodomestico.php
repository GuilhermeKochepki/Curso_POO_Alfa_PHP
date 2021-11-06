<?php

abstract class Eletrodomestico{
    public bool $estaLigado;

    public function __construct(){
        $this->estaLigado = false;
    }

    public function ligar() {
        if (!$this->estaLigado) {
            $this->estaLigado = true;
        } else {
            return 'Está ligado';
        }
    }
    public function desligar(){
        if ($this->estaLigado) {
            $this->estaLigado = false;
        } else {
            return 'Está desligado';
        }
    }
    


}