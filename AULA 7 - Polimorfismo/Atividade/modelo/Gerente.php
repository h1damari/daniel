<?php

require_once('Funcionario.php');

class Gerente extends Funcionario{

    public function calcularSalario()
    {
        return $this->salarioBase * 4.5;
    }

    public function getCargo()
    {
        return "Gerente";
    }
}