<?php

class Calculadora{
    private $numA;
    private $numB;

//métodos

public function soma(){
    $soma = $this->numA + $this->numB;
    return $soma;
}

public function subtracao(){
    $subtracao = $this->numA - $this->numB;
    return $subtracao;
}

public function multiplicacao(){
    $multiplicacao = $this->numA * $this->numB;
    return $multiplicacao;
}

public function divisao(){
    $divisao = $this->numA / $this->numB;
    return $divisao;
}

public function resto(){
    $resto = $this->numA % $this->numB;
    return $resto;
}

//GETs e SETs

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}

//Programa Principal

$calculos = new Calculadora;
$calculos->setNumA(readline("fala o numero A ai pra nois fortalecer aqui nos calculos da nasa: "));
$calculos->setNumB(readline("fala o numero B ai pra nois fortalecer aqui nos calculos da nasa: "));

echo "Soma: " . $calculos->soma() . "\n" . "Subtração: " . $calculos->subtracao() . "\n" . "Multiplicação: " . $calculos->multiplicacao() . "\n" . "Divisão: " . $calculos->divisao() . "\n" . "Resto: " . $calculos->resto() . "\n";