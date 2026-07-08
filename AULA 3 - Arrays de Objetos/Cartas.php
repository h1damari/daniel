<?php

class Carta{
    private $numero;
    private $nome;

    public function __toString()
    {
        return "Número da Carta: " . $this->numero . "\n" .
               "Nome da Carta: " . $this->nome . "\n";
    }

    //GETs e SETs

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

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
}

$cartas = [];

$carta1 = new Carta;
$carta1->setNumero("1");
$carta1->setNome("Max Verstappen");
array_push($cartas, $carta1);

$carta2 = new Carta;
$carta2->setNumero("2");
$carta2->setNome("Lewis Hamilton");
array_push($cartas, $carta2);

$carta3 = new Carta;
$carta3->setNumero("3");
$carta3->setNome("Ayrton Senna");
array_push($cartas, $carta3);

$carta4 = new Carta;
$carta4->setNumero("4");
$carta4->setNome("Fernando Alonso");
array_push($cartas, $carta4);

$carta5 = new Carta;
$carta5->setNumero("5");
$carta5->setNome("Michael Schumacher");
array_push($cartas, $carta5);

$carta6 = new Carta;
$carta6->setNumero("6");
$carta6->setNome("Alain Prost");
array_push($cartas, $carta6);

$carta7 = new Carta;
$carta7->setNumero("7");
$carta7->setNome("Oscar Piastri");
array_push($cartas, $carta7);

$cartaSorteada = $cartas[array_rand($cartas)];

foreach($cartas as $c){
    echo $c;
}

print_r($cartaSorteada);

do{
    $escolha = readline("Escolha uma das Cartas: ");
    if($escolha == $cartaSorteada)
        echo "Parabéns, você acertou.\n";
    else
        echo "Errou, tente novamente.\n";
} while ($escolha != $cartaSorteada);

