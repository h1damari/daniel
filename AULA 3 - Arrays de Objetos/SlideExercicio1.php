<?php

class Escola
{

    //Atributos
    private $nome;
    private $endereco;
    private $quantidadeDeAlunos;

    //Mehtodos

    public function __toString()
    {
        $dados = "\nNome: " . $this->nome;
        $dados .= " | Endereço: " . $this->endereco;
        $dados .= " | Quantidade de Alunos: " . $this->quantidadeDeAlunos . "\n";
        return $dados;
    }

    //GETs e SETs

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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of quantidadeDeAlunos
     */
    public function getQuantidadeDeAlunos()
    {
        return $this->quantidadeDeAlunos;
    }

    /**
     * Set the value of quantidadeDeAlunos
     */
    public function setQuantidadeDeAlunos($quantidadeDeAlunos): self
    {
        $this->quantidadeDeAlunos = $quantidadeDeAlunos;

        return $this;
    }
}

// Programa Principal
$escolas = array();

$escola1 = new Escola;
$escola1->setNome(readline("Fala o nome da 1° escola ai: "));
$escola1->setEndereco(readline("Fala o endereço da 1° escola ai: "));
$escola1->setQuantidadeDeAlunos(readline("Fala a quantidade de alunos da 1° escola ai: "));
array_push($escolas, $escola1);

$escola2 = new Escola;
$escola2->setNome(readline("Fala o nome da 2° escola ai: "));
$escola2->setEndereco(readline("Fala o endereço da 2° escola ai: "));
$escola2->setQuantidadeDeAlunos(readline("Fala a quantidade de alunos da 2° escola ai: "));
array_push($escolas, $escola2);

$escola3 = new Escola;
$escola3->setNome(readline("Fala o nome da 3° escola ai: "));
$escola3->setEndereco(readline("Fala o endereço da 3° escola ai: "));
$escola3->setQuantidadeDeAlunos(readline("Fala a quantidade de alunos da 3° escola ai: "));
array_push($escolas, $escola3);

$escola4 = new Escola;
$escola4->setNome(readline("Fala o nome da 4° escola ai: "));
$escola4->setEndereco(readline("Fala o endereço da 4° escola ai: "));
$escola4->setQuantidadeDeAlunos(readline("Fala a quantidade de alunos da 4° escola ai: "));
array_push($escolas, $escola4);



$melhorEscola = $escolas[0];
foreach ($escolas as $e) {
    echo $e;
}

if ($escolas[1]->getQuantidadeDeAlunos() > $melhorEscola->getQuantidadeDeAlunos())
    $melhorEscola = $escolas[1];
if ($escolas[2]->getQuantidadeDeAlunos() > $melhorEscola->getQuantidadeDeAlunos())
    $melhorEscola = $escolas[2];
if ($escolas[3]->getQuantidadeDeAlunos() > $melhorEscola->getQuantidadeDeAlunos())
    $melhorEscola = $escolas[3];

echo "\n\nDados da melhor escola: " . $melhorEscola;