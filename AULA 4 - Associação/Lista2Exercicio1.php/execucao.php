<?php

require_once('modelo/Carro.php');
require_once('modelo/Fabricante.php');

$nome = "Volkswagen";
$sigla = "VW";
$volkswagen = new Fabricante($nome, $sigla);

$nome = "Chevrolet";
$sigla = "GM";
$chevrolet = new Fabricante($nome, $sigla);

$nome = "Fiat";
$sigla = "F";
$Fiat = new Fabricante($nome, $sigla);

$nome = "Renault";
$sigla = "RN";
$Renault = new Fabricante($nome, $sigla);

do{

echo "1 - Cadastrar Carro\n";
echo "2 - Excluir Carro\n";
echo "3 - Listar Carro\n";
echo "0 - Sair\n";
$opcao = readline("escolha uma opção: ");

switch($opcao){
    case 1:
        $modelo = readline("Modelo do carro: ");
        $anoFabricacao = readline("Ano do carro: ");
        $fabricante = readline("Fabricante: ");

        
        break;
    
    case 2:
        $delete = readline("Qual o índice do carro a ser removido? ");
        if(isset($carros[$delete]))
            array_splice($carros, $delete);
        else 
            echo "Índice inválido!\n\n";
        break;
    
    case 3:
        break;

    case 4:
        break;
}

}while($opcao !=0);