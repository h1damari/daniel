<?php

require_once('modelo/Atleta.php');
require_once('modelo/Pais.php');

$atletas = array();


do{
    echo "1 - Cadastrar atleta\n";
    echo "2 - Excluir atleta\n";
    echo "3 - Listar atletas\n";
    echo "0 - Sair\n";
    $opcao = readline("escolha uma opção: ");

    switch($opcao){

        case 1:
            $nome = readline("Informe o nome do atleta: ");
            $idade = readline("Idade do atleta: ");
            $esporte = readline("Esporte do atleta: ");
            $pais = readline("Pais do atleta: ");
            $continente = readline("Continente do Pais: ");

            $pais = new Pais($pais, $continente);
            $atleta = new Atleta($nome, $idade, $esporte, $pais);

            array_push($atletas, $atleta);

            break;

        case 2: 
            $delete = readline("Qual o índice do atleta que deseja excluir? ");
                 if(isset($atletas[$delete]))
                    array_splice($atletas, $delete);
                 else 
                    echo "Índice inválido!\n\n";

            break;

        case 3:
            foreach($atletas as $a){
                echo $a;
            }
            break;
        case 0:
            echo "Saindo...";
            break;
    } 
} while($opcao != 0);
   
