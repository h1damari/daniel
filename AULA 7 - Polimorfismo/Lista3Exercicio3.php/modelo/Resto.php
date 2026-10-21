<?php

require_once('Calculadora.php');

class Resto extends Calculadora{

    public function __construct($numA, $numB)
    {
        $this->numA = $numA; 
        $this->numB = $numB;

    }


    public function calcular()
    {
        return $this->numA % $this->numB;
    }
}