<?php

require_once('modelo/Divisao.php');
require_once('modelo/Resto.php');
require_once('modelo/Soma.php');
require_once('modelo/Multiplicacao.php');
require_once('modelo/Subtracao.php');


$opcao = null;

do{
    
$numA = readline("Informe o num A: ");
$numB = readline("Informe o num B: ");


    echo "
    1 - Divisao
    2 - Multiplicacao
    3 - Resto
    4 - Soma
    5 - Subtracao";

    $opcao = readline(" ");

    switch($opcao){
        case 1:
            $divisao = new Divisao($numA, $numB);
            echo $divisao->calcular();
        break;

        case 2:
            $multiplicacao = new Multiplicacao($numA, $numB);
            echo $multiplicacao->calcular();
        break;

        case 3:
            $resto = new Resto($numA, $numB);
            echo $resto->calcular();
        break;

        case 4:
            $soma = new Soma($numA, $numB);
            echo $soma->calcular();
        break;

        case 5:
            $subtracao = new Subtracao($numA, $numB);
            echo $subtracao->calcular();
        break;

        default:
            echo "nao funciona";
        break;

    }

} while($numA == 0 and $numB == 0);