<?php

class IMC {
    public float $peso;
    public float $altura;
    public string $sexo;

    public function __construct(float $peso, float $altura, string $sexo) {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->sexo = $sexo;
    }

    public function calcularImc() : float {
        $imc = $this->peso / ($this->altura * $this->altura);
        return round($imc,1);
    }

    public function retornarGrau() {
        $imc = $this->calcularImc();
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9){
            return "Peso normal";
        } elseif ($imc >= 25.0 && $imc <= 29.9){
            return "Pré Obesidade";
        } elseif ($imc >= 30.0 && $imc <= 34.9){
            return "Obesidade Grau 1";
        } elseif ($imc >= 35.0 && $imc <= 39.9){
            return "Obesidade Grau 2";
        } elseif ($imc > 40){
            return "Obesidade Grau 3";
        }
    }
}