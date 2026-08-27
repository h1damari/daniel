<?php

require_once("modelo/Goku.php");
require_once("modelo/HomemDeFerro.php");
require_once("modelo/Pikachu.php");

$countGoku = 0;
$countFerro = 0;
$countPikachu = 0;

$opcao = null;

do{

    echo "\nBEM-VINDO AO EXÉRCITO INTERMUNDIAL\n";
    echo "1- Goku\n";
    echo "2- Homem de Ferro\n";
    echo "3- Pikachu\n";
    echo "0 - Sair\n";
    $opcao = readline("Informe o guerreiro: ");

    switch($opcao){
        case 1:
            $guerreiro = new Goku();

            $escolha = readline("\nDeseja atacar ou transformar? (a/t) ");
                if(strtolower($escolha) == "a")
                    echo $guerreiro->atacar();
                else{
                    $countGoku++;
                    $guerreiro->setTransformacao($countGoku);
                    echo $guerreiro->transformar();
                }
                
        break;

        case 2:
            $guerreiro = new HomemDeFerro();

            $escolha = readline("\nDeseja atacar ou transformar? (a/t) ");
                if(strtolower($escolha) == "a")
                    echo $guerreiro->atacar();
                else{
                    $countFerro++;
                    $guerreiro->setTransformacao($countFerro);
                    echo $guerreiro->transformar();
                }
        break;

        case 3:
            $guerreiro = new Pikachu();

            $escolha = readline("\nDeseja atacar ou transformar? (a/t) ");
                if(strtolower($escolha) == "a")
                    echo $guerreiro->atacar();
                else{
                    $countPikachu++;
                    $guerreiro->setTransformacao($countPikachu);
                    echo $guerreiro->transformar();
                }
        break;
    } 
} while($opcao != 0);
