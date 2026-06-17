<?php

//orientação a objetos tem 4 pilares, o primeiro é a Abstração:

//Declaração de classe
class Monitor{

    //Atributos
    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;

    //Métodos
    function ligar(){
        echo "Monitor Ligado!\n";
    }

    function desligar(){
        echo "Monitor Desligado!\n";
    }

    function exibirImagem(){
        echo "Monitor exibindo imagem em " . $this->polegadas . " polegadas!\n";
    }

} //Fim da classe monitor

//Programa Principal

    //Criando o obejto Monitor1
    $monitor1 = new Monitor();
    $monitor1->polegadas = 23;
    $monitor1->resolucao = "1920x1080";
    $monitor1->marca = "AOC";
    $monitor1->cor = "Preto";
    $monitor1->voltagem = 220;

    $monitor1->ligar();
    $monitor1->exibirImagem();
    $monitor1->desligar();
    printf("Monitor1\n Polegadas: %d | Marca: %s\n",
        $monitor1->polegadas, $monitor1->marca);

    //Monitor2
    $monitor2 = new Monitor();
    $monitor2->polegadas = 55;
    $monitor2->resolucao = "4920x2080";
    $monitor2->marca = "Samsung";
    $monitor2->cor = "Violeta";
    $monitor2->voltagem = 220;
    printf("Monitor2\n Polegadas: %d | Marca: %s | Cor: %s\n",
        $monitor2->polegadas, $monitor2->marca, $monitor2->cor);
