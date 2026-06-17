<?php

class Pessoa{

    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    public function retornaApresentacao(){
        $dados = "Olá, sou " . $this->nome;
        $dados .= " resido no endereço " . $this->endereco;
        $dados .= ", " . $this->cidade;
        $dados .= "-" . $this->uf;
        $dados .= " e possuo uma altura de " . $this->altura;

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
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

//Programa principal

$pessoa = new Pessoa();
$pessoa->setNome(readline("fala o nome ae paezao: "));
$pessoa->setEndereco(readline("fala o endereco ai pae: "));
$pessoa->setCidade(readline("fala a cidade que fica o morro ae: "));
$pessoa->setUf(readline("fala o estado que tu mora ai paizao: "));
$pessoa->setAltura(readline("fala a altura ai lindao: "));

echo $pessoa->retornaApresentacao();