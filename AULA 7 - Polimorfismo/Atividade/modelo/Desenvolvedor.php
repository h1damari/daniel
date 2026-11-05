<?php

require_once('Funcionario.php');

class Desenvolvedor extends Funcionario{

    public function calcularSalario()
    {
        return $this->salarioBase * 2.3;
    }

    public function getCargo()
    {
        return "Desenvolvedor";
    }
}