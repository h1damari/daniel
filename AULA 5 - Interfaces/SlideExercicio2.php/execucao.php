<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

echo "1- Residencial\n";
echo "2- Comercial\n";
echo "3- Industrial\n";
echo "0 - Sair\n";

$opcao = readline("Informe o tipo de consumidor: ");

do{
    $forma = null;
    if($opcao == 1) {
        $cliente = new Residencial();
        $cliente->setConsumo(readline("Informe o consumo (KWh): "));

    } else if($opcao == 2) {
        $cliente = new Comercial();
        $cliente->setConsumo(readline("Informe o consumo (KWh): "));

    } else if($opcao == 3) {
        $cliente = new Industrial();
        $cliente->setConsumo(readline("Informe o consumo (KWh): "));
    } 
} while($opcao != 0);
    

echo "Fatura: " . $cliente->getValorFatura() . "\n";
