<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

$funcionario = null;


do{
    echo "\n\nCALCULADORA DE SALARIOS DE CLT'S\n\n";

    echo "Cargos:\n";
    echo "1- Gerente\n";
    echo "2- Desenvolvedor\n";
    echo "3- Estagiario\n";
    echo "0- Sair\n";

    $tipo = readline("Informe o seu cargo: ");


    switch ($tipo) {
        case 1:
            $funcionario = new Gerente();
            break;
    
        case 2:
            $funcionario = new Desenvolvedor();
            break;
    
        case 3:
            $funcionario = new Estagiario();
            break;
    
        case 0:
            echo "Saindo...";
            sleep(3);
    
        default:
            echo "Cargo inválido!\n";
            exit;
    }

    $funcionario->setNome(readline("Informe o seu nome: "));

    echo $funcionario;

}while($tipo != 0);