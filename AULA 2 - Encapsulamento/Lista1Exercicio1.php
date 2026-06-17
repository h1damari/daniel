<?php

class Automovel{
    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $velocidadeMax;

//Mehtodos
public function __toString()
    {
        $carro = "Marca: " . $this->marca;
        $carro .= " | Modelo: " . $this->modelo;
        $carro .= " | Ano de Fabricação: " . $this->anoFabricacao;
        $carro .= " | Velocidade Máxima: " . $this->velocidadeMax;
        return $carro . "\n";
    }

//GETs SETs


    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of velocidadeMax
     */
    public function getVelocidadeMax()
    {
        return $this->velocidadeMax;
    }

    /**
     * Set the value of velocidadeMax
     */
    public function setVelocidadeMax($velocidadeMax): self
    {
        $this->velocidadeMax = $velocidadeMax;

        return $this;
    }
}

//Programa Principal

$toyota = new Automovel;
$toyota->setMarca(readline("fala a marca do 1° automovel ai (toyota): : "));
$toyota->setModelo(readline("fala o modelo do toyota ai: "));
$toyota->setAnoFabricacao(readline("fala o ano de fabricação do toyota ai: "));
$toyota->setVelocidadeMax(readline("fala a velocidade máixma do toyota ai: "));
echo "\n";

$honda = new Automovel;
$honda->setMarca(readline("fala a marca do 2° automovel ai (honda): : "));
$honda->setModelo(readline("fala o modelo do honda ai: "));
$honda->setAnoFabricacao(readline("fala o ano de fabricação do honda ai: "));
$honda->setVelocidadeMax(readline("fala a velocidade máixma do honda ai: "));
echo "\n";

$ford = new Automovel;
$ford->setMarca(readline("fala a marca do 3° automovel ai (ford): : "));
$ford->setModelo(readline("fala o modelo do ford ai: "));
$ford->setAnoFabricacao(readline("fala o ano de fabricação do ford ai: "));
$ford->setVelocidadeMax(readline("fala a velocidade máixma do ford ai: "));
echo "\n";

$carroMaisRapido = $toyota;
$carroMaisLento = $ford;

//carro mais rapido
if($honda->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax())
    $carroMaisRapido = $honda;

if($ford->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax())
    $carroMaisRapido = $ford;

//carro mais lento
if($toyota->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax())
    $carroMaisLento = $toyota;

if($honda->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax())
    $carroMaisLento = $honda;

echo "Carro mais rápido: \n" . $carroMaisRapido . "\n";
echo "Carro mais lento: \n" . $carroMaisLento . "\n";