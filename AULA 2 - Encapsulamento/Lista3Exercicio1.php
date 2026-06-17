<?php

class Locadora{

//atributs
    private $totalBicicletas;
    private $bicicletasAlugadas;

//mehtods
    public function __construct(int $totalBicicletas){
        $this->totalBicicletas = $totalBicicletas;
        echo "quantidade confirmadada..\n";
    }

    public function alugarBicicleta(){
        $qtd = readline("Informe a quantidade de bikes que deseja alugar: ");

        if($qtd <= $this->totalBicicletas){
            $this->bicicletasAlugadas = $qtd;
            return true;
        }
        else
            return false;
    }

    public function devolverBicicleta(){
        $qtd =  readline("digite a quantidade de bicicletas que deseja devolver: ");
        
        if($qtd <= $this->bicicletasAlugadas){
            $this->bicicletasAlugadas - $qtd; 
            return true;
        }
        else 
            return false;
    }

    public function __toString(){
        $dados = "Quantidade de bicicletas total: " . $this->totalBicicletas . "\n";
        $dados .= "Quantidade de bicicletas Alugadas: " . $this->bicicletasAlugadas . "\n";
        $dados .= "Quantidade de bicicletas livres: " . $this->totalBicicletas - $this->bicicletasAlugadas . "\n";

        return $dados;
    }

    

    /**
     * Get the value of totalBicicletas
     */
    public function getTotalBicicletas()
    {
        return $this->totalBicicletas;
    }

    /**
     * Set the value of totalBicicletas
     */
    public function setTotalBicicletas($totalBicicletas): self
    {
        $this->totalBicicletas = $totalBicicletas;

        return $this;
    }

    /**
     * Get the value of bicicletasAlugadas
     */
    public function getBicicletasAlugadas()
    {
        return $this->bicicletasAlugadas;
    }

    /**
     * Set the value of bicicletasAlugadas
     */
    public function setBicicletasAlugadas($bicicletasAlugadas): self
    {
        $this->bicicletasAlugadas = $bicicletasAlugadas;

        return $this;
    }
}

//Programa Principal

$bike = new Locadora(readline("Informe o total de bicicletas: "));

echo("Bem vindo à MOTOKASHOP!\n");

        $desejo = readline(
            "Informe o que deseja fazer na nossa loja:
    1 - Alugar uma Motoka\n
    2 - Devolver uma Motoka\n
    0 - Sair\n
    "
        );

        switch($desejo){

            case 1:
                $bike->alugarBicicleta();
                break;

            case 2:
                $bike->devolverBicicleta();
                break;

            case 0:
                echo "Saindo...";
                break;
        }

if($bike->alugarBicicleta() == true)
    echo "bike alugada com sucesso!";
if($bike->alugarBicicleta() == false)
    echo "Não há bikes disponíves nesta quantidade.\n"; echo $bike;

if($bike->devolverBicicleta() == true)
    echo "bike devolvida com sucesso!";
if($bike->devolverBicicleta() == false)
    echo "Erro ao devolver a motoka.\n";