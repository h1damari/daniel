<?php

require_once('Veiculo.php');

class Onibus extends Veiculo{
    public function getTipo(){
        return "Onibus";
    }
    public function getValorViagem(){
        $valor = $this->valorAluguel + ($this->kmRodados * 4.20);
        return $valor;
    }
}