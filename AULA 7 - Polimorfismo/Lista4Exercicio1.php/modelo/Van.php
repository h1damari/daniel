<?php

require_once('Veiculo.php');

class Van extends Veiculo{
    public function getTipo(){
        return "Van";
    }
    public function getValorViagem(){
        $valor = $this->valorAluguel + ($this->kmRodados * 2.10);
        return $valor;
    }
}