<?php

class Receita{
    private $descricao;
    private $valor;

    public function __toString(){
        return "\nDescrição da Receita: " . $this->descricao . "\n" .
               "Valor da Receita: " . $this->valor . "\n";
    }

    //GETs E SETs

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


class Despesa{
    private $descricao;
    private $valor;

    public function __toString(){
        return "\nDescrição da Despesa: " . $this->descricao . "\n" .
               "Valor da Despesa: " . $this->valor . "\n";
    }

    //GETs E SETs

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}


$receitas = [];
$despesas = [];

$opcao = 0;
do{
    echo "\n\n-----RECEITA FEDERAL-----\n\n";
    echo "1 - Adicionar receita\n";
    echo "2 - Adicionar Despesa\n";
    echo "3 - Listar receitas\n";
    echo "4 - Listar despesas\n";
    echo "5 - Sumarizar\n";
    echo "0 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch($opcao){
        case 1:
            $receita = new Receita;
            $receita->setDescricao(readline("Informe a descrição desta receita: "));
            $receita->setValor(readline("Informe o valor desta receita: "));

            array_push($receitas, $receita);

        break;

        case 2:
            $despesa = new Despesa;
            $despesa->setDescricao(readline("Informe a descrição desta despesa: "));
            $despesa->setValor(readline("Informe o valor desta despesa: "));

            array_push($despesas, $despesa);

        break;

        case 3:
            foreach($receitas as $r){
                echo $r;
            }
        break;

        case 4:
            foreach($despesas as $d){
                echo $d;
            }
        break;

        case 5:
            $totalReceita = 0;
            foreach($receitas as $r){
                $totalReceita += $r->getValor();
            }
            
            $totalDespesa = 0;
            foreach($despesas as $d){
                $totalDespesa += $d->getValor();
            }
            
            $saldo = $totalReceita - $totalDespesa;

            echo "Total de Receitas: R$ $totalReceita\n";
            echo "Total de Despesas: R$ $totalDespesa\n";
            echo "Saldo: $saldo";
        break;

        case 0:
            echo "Saindo...\n";
        break;

        default:
            echo "Opção inválida!\n";
    }
} while($opcao != 0);