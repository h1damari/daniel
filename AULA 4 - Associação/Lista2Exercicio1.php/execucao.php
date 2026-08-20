<?php

require_once('modelo/Carro.php');
require_once('modelo/Fabricante.php');

$fabricantes = array();

$fabricantes["VW"] = new Fabricante("Volkswagen", "VW");  
$fabricantes["GM"] = new Fabricante("Chevrolet", "GM");  
$fabricantes["F"]  = new Fabricante("Fiat", "F");  
$fabricantes["RN"] = new Fabricante("Renault", "RN");  

$carros = array();

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
            $fabricanteSigla = readline("Sigla da fabricante (VW, GM, F, RN): ");

            $fabricanteVerificada = null;
            foreach($fabricantes as $f){
                if($f ->getSigla() == $fabricanteSigla){
                     $fabricanteVerificada = $f;
                }
            }

            if($fabricanteVerificada != null){
                $automovel = new Carro($modelo, $anoFabricacao, $fabricanteVerificada);
                array_push($carros, $automovel);
            } else{
                echo "digita a porra de uma sigla valida\n\n";
            }
        break;
        
        case 2:
            $delete = readline("Qual o índice do carro a ser removido? ");
            if(isset($carros[$delete]))
                array_splice($carros, $delete, 1);
            else 
                echo "Índice inválido!\n\n";
        break;
        
        case 3:
            foreach ($carros as $c) {
                echo $c;
            }
        break;


        case 0:
            echo "\nSaindo...";
        break;
    }

}while($opcao !=0);