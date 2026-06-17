<?php

class Veiculo{
    private $capacidade;
    private $passagensVendidas;

    //mehtudus
     public function __construct(int $capacity)
    {
        $this->capacidade = $capacity;
        echo "capacidade confirmada\n";
    }

    public function venderPassagem(int $quantidade): bool{

        if($quantidade == 0)
            echo "encerrando compra";

        if($quantidade <= $this->capacidade){
            $this->passagensVendidas = $quantidade;
            return true;
        }else
            return false;
    }


   
    //GETIs e SETIs

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }

}

$van = new Veiculo(readline("Informe a capacidade do veículo: "));
$resultado = $van->venderPassagem(readline("Informe a quantidade de passagens que deseja efetuar a compra: "));

if($resultado == true)
    echo "Passagem comprada com sucesso!\n";
else
    echo "nao cabe toda essa rapaziada ae nao paezao\n";
