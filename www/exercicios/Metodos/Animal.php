<?php

class Animal {
    public $especie;
    public $andar;

    public function obterEspecie() {
        return $this->especie;
    }

    public function obterFormaDeAndar() {
        return $this->andar;
    }

}