<?php

require_once('Veiculo.php');

class MicroOnibus extends Veiculo{
    public function getTipo(){
        return "MicroOnibus";
    }
    public function getValorViagem(){
        $valor = $this->valorAluguel + ($this->kmRodados * 2.75);
        return $valor;
    }
}