<?php

class Posto{
    private $qtdLitrosPosto;
    private $abastecimentos = [];                                                                                               

    public function __construct($qtdLitrosPosto) {
        $this->qtdLitrosPosto = $qtdLitrosPosto;
    }

    public function abastecer($qtdLitros) {
            if($qtdLitros <= $this->qtdLitrosPosto){
                $this->qtdLitrosPosto -= $qtdLitros;
                $this->abastecimentos[] = $qtdLitros;
                return true;
            }else{
                return false;
            }
        }

    //GET e SET
    
    /**
     * Get the value of qtdLitrosPosto
     */
    public function getQtdLitrosPosto()
    {
        return $this->qtdLitrosPosto;
    }

    /**
     * Set the value of qtdLitrosPosto
     */
    public function setQtdLitrosPosto($qtdLitrosPosto): self
    {
        $this->qtdLitrosPosto = $qtdLitrosPosto;

        return $this;
    }

    /**
     * Get the value of abastecimentos
     */
    public function getAbastecimentos()
    {
        return $this->abastecimentos;
    }

    /**
     * Set the value of abastecimentos
     */
    public function setAbastecimentos($abastecimentos): self
    {
        $this->abastecimentos = $abastecimentos;

        return $this;
    }   
}

$posto1 = new Posto(0);

$opcao = 0;
do{
    echo "BEM VINDO AO POSTO DO JEGUE\n\n";
    echo "1 - Abastecer\n";
    echo "2 - Repor Estoque\n";
    echo "3 - Listar abastecimento\n";
    echo "0 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch($opcao){
        case 1:
            $qtdLitros = readline("Digite a quantidade de litros a ser abastecida: ");
            if($posto1->abastecer($qtdLitros) == true){
                echo "Abastecimento realizado com sucesso!\n";
            }else{
                echo "Não há combustível suficiente no posto!\n";
            }
            break;

        case 2:
            $qtdLitros = readline("Fala a quantidade de litros a ser reposta: ");
            $posto1->setQtdLitrosPosto($posto1->getQtdLitrosPosto() + $qtdLitros);
            echo "Estoque reposto com sucesso!\n";
            break;

        case 3:
            foreach($posto1->getAbastecimentos() as $i => $abastecimento){
                    echo "Abastecimento $i: " . $abastecimento . " litros\n";
            }
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
} while($opcao != 0);