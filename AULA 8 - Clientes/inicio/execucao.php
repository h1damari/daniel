<?php

/*
require_once("util/Conexao.php");

//Testar a conexão com o banco de dados
$conexao = Conexao::getConexao();
print_r($conexao);
*/

require_once("modeo/Cliente.php");
require_once("modeo/ClientePF.php");
require_once("modeo/ClientePJ.php");

do{
    echo "\n\n...CADASTRO DE CLIENTELA...\n\n";
    echo "1 - Inserri Cliente PF\n";
    echo "2 - Inserrri Cliente PJ\n";
    echo "0 - Sair\n";

    $opcao = readline("Informe a opção: ");

    switch($opcao){
        case 1:
            //Inserir
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("Informe o nome completo: "));
            $clientePF->setNomeSocial(readline("Informe seu nome social: "));
            $clientePF->setCpf(readline("Informe seu CPF: "));
            $clientePF->setEmail(readline("Informe seu e-mail: "));
        break;

        case 2:
        break;

        case 0:
            echo "Saindo...";
            sleep(3);
        break;

        default:
            echo "Opção inválida!";
        break;
    }
}while($opcao != 0);