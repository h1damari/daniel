<?php

/*
require_once("util/Conexao.php");

//Testar a conexão com o banco de dados
$conexao = Conexao::getConexao();
print_r($conexao);
*/

require_once("modelo/Cliente.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/ClienteDAO.php");

$clienteDAO = new ClienteDAO();

do{
    echo "\n\n...CADASTRO DE CLIENTELA...\n\n";
    echo "1 - Inserri Cliente PF\n";
    echo "2 - Inserrri Cliente PJ\n";
    echo "3 - Listar\n";
    echo "4 - Buscar\n";
    echo "5 - Excluir\n";
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

            $clienteDAO->inserir($clientePF);
        break;

        case 2:
            $clientePJ = new ClientePJ();
            $clientePJ->setRazaoSocial(readline("Informe a razão social: "));
            $clientePJ->setNomeSocial(readline("Informe seu nome social: "));
            $clientePJ->setCnpj(readline("Informe seu CNPJ: "));
            $clientePJ->setEmail(readline("Informe seu e-mail: "));

            $clienteDAO->inserir($clientePJ);
        break;

        case 3:
            //Listar
            $clientes = $clienteDAO->listar();
            foreach($clientes as $c){
                echo $c . "\n";
            }
        break;

        case 0:
            echo "Saindo";
            sleep(1); echo "."; sleep(1); echo "."; sleep(1); echo "."; sleep(1);
        break;

        default:
            echo "Opção inválida!";
        break;
    }
}while($opcao != 0);