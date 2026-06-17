<?php

class Pessoa
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString()
    {
        $dados = $this->nome . " " . $this->sobrenome . ", " . $this->idade . " anos.\n\n";
        $dados .= "Nome do meliante: " . $this->nome . "\n";
        $dados .= "Sobrenome do meliante: " . $this->sobrenome . "\n";
        $dados .= "Idade do meliante: " . $this->idade . "\n";

        return $dados;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoas = array();
$pessoa1 = new Pessoa;
$opcao = 0;
do {
    echo "\n-----------MENU-----------\n";
    echo "1- Inserir\n";
    echo "2- Listar\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        case 1:
            $pessoa1->setNome(readline("Informe o nome: "));
            $pessoa1->setSobrenome(readline("Informe o sobrenome: "));
            $pessoa1->setIdade(readline("Informe sua idade: "));
            array_push($pessoas, $pessoa1);
            break;
        case 2:
            echo "Listando....\n\n";
            foreach($pessoas as $p){
                echo $p;
            }
            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);
