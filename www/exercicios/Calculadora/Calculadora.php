<?php

class Calculadora {
    public float $numero1;
    public float $numero2;

    public function __construct(float $numero1, float $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function somar() : float {
        return $this->numero1 + $this->numero2;
    }
    public function subtrair() : float {
        return $this->numero1 - $this->numero2;
    }
    public function multiplicar() : float {
        return $this->numero1 * $this->numero2;
    }
    public function dividir() : float {
        return round($this->numero1 / $this->numero2, 2);
    }



}








