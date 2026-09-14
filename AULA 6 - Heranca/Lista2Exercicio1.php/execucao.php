<?php

require_once('modelo/PessoaFisica.php');
require_once('modelo/PessoaJuridica.php');


$pessoas = [];
$opcao = null;

do{

    echo "\n1 - Cadastrar pessoa física\n";
    echo "2 - Cadastrar pessoa Jurídica\n";
    echo "3 - Listar\n";
    echo "4 - Excluir\n";
    echo "0 - Sair\n";

    $opcao = readline("Informe a opção: ");
    switch($opcao){
        case 1:
            $PessoaFisica = new PessoaFisica();
            $PessoaFisica->setNome(readline("Informe o nome da tal pessoa física: "));
            $PessoaFisica->setIdade(readline("Informe a idade da tal pessoa: "));
            $PessoaFisica->setCpf(readline("Informe o cpf da tal pessoa: "));

            $pessoas[] = $PessoaFisica;
        break;

        case 2:
            $PessoaJuridica = new PessoaJuridica();
            $PessoaJuridica->setNome(readline("Informe o nome da tal pessoa juridica: "));
            $PessoaJuridica->setNomeFantasia(readline("Informe o nome Fantasia da tal empresa: "));
            $PessoaJuridica->setCnpj(readline("Informe o cnpj da tal empresa: "));

            $pessoas[] = $PessoaJuridica;
        break;

        case 3:
            foreach($pessoas as $id => $p){
                if($p instanceof PessoaFisica)
                    echo "[$id] - [FÍSICA] " . $p . "\n";
                else
                    echo "[$id] - [JURÍDICA] " . $p . "\n";
            }
        break;

        case 4:
            $delete = readline("Qual o índice da pessoa a ser removida? ");
            if(isset($pessoas[$delete]))
                array_splice($pessoas, $delete, 1);
            else 
                echo "Índice inválido!\n\n";
        break;

        case 0:
            echo "saindo...";
            sleep(3);
        break;

        default:
            echo "Opção inválida!";
        break;
    }


}while ($opcao != 0);