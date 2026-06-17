<?php

class Cidade{

//atributs
    private $nome;
    private $populacao;
    private $area;

//mehtods

    public function mudarNome(){
        $novoNome = readline("Deseja mudar o nome da cidade para qual? ");
        return $this->nome = $novoNome;
    }

    public function aumentarPopulation(){
        $novaPopulation = readline("Deseja arrumar a população da cidade para qual? ");
        return $this->populacao = $novaPopulation;
    }

    public function aumentarReduzirArea(){
        $novaArea = readline("Deseja mudar a area da cidade para qual (xkm²)? ");
        return $this->area = $novaArea;
    }

    public function __toString()
    {
        $dados = "Nome: " . $this->getNome() . "\n";
        $dados .= "População: " . $this->getPopulacao() . "\n";
        $dados .= "Area: " . $this->getArea() . "km²". "\n";

        return $dados;
    }

    
//GETis e SETis
    /**
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
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
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}

//Programa Principal

$foz = new Cidade;
$foz->setNome(readline("Informe o nome da cidade ai: "));
$foz->setPopulacao(readline("fala a população ai: "));
$foz->setArea(readline("fala a area da cidade ai (xkm²): "));

$modificar = readline("Deseja modificar alguma coisa? (s/n) ");

    if($modificar == "n"){
        echo "Mostrando os dados...\n";
        echo $foz;
    }

    if($modificar == "s"){

        $qualCoisaModificar = readline(
            "Informe o número para qual informação deseja modificar:
    1 - Nome\n
    2 - População\n
    3 - Área\n
    0 - Sair\n
    "
        );

        switch($qualCoisaModificar){

            case 1:
                $foz->mudarNome();
                break;

            case 2:
                $foz->aumentarPopulation();
                break;

            case 3:
                $foz->AumentarReduzirArea();
                break;

            case 0:
                echo "Saindo...";
                break;
        }

        echo "\nDados atualizados:\n";
        echo $foz;
    }
    else{
        echo "Informações salvas!";
    }