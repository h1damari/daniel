<?php

abstract class Funcionario{

    protected float $salarioBase;
    protected string $nome;

    public function __construct()
    {
        $this->salarioBase = 2000;
    }
    
    public function __toString()
    {
        return "O funcionário " . $this->nome . ", cargo " . $this->getCargo() . ", possui salário de de R$ " . $this->calcularSalario() . "\n";
    }

    public abstract function calcularSalario();
    public abstract function getCargo();

    //GETs SETs

    /**
     * Get the value of salarioBase
     */
    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    /**
     * Set the value of salarioBase
     */
    public function setSalarioBase(float $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}