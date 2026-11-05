<?php

require_once('Veiculo.php');

class Carro extends Veiculo{
    
    public function getTipo(){
        return "Carro";
    }
    public function getValorViagem(){
        $valor = $this->valorAluguel + ($this->kmRodados * 1.5);
        return $valor;
    }
}