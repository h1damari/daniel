<?php

//orientação a objetos tem 4 pilares, o segundo é o Encapsulamento:

class Pessoa{
    private $nome;
    private $sobrenome;
    private $idade;
    
    public function retornaApresentacao(){
        $dados = "Olá, sou " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= "e tenho " . $this->idade;
        $dados .= "anos! \n";

        return $dados;
    }

    //GETs e SETs -> ambos são métodos.
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
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

//Programa principal
$pessoa = new Pessoa();
$pessoa->setNome("fuck")
       ->setSobrenome("niggers")
       ->setIdade(67);

echo "Nome da pessoa: " . $pessoa->getNome() ."\n";
echo $pessoa->retornaApresentacao();