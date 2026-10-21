<?php

require_once('modelo/Participacao.php');
require_once('modelo/Prova.php');
require_once('modelo/Trabalho.php');

$arrayNota = [];

$opcao = null;

for($i=0; $i<3; $i++){

    echo "Qual é o instrumento de avaliação?
    1 - Prova
    2 - Trabalho
    3 - Participacao\n";

    $opcao = readline("Informe a opcão: ");

    switch($opcao){
        case 1:
            $nota = readline("Informe a nota da prova: ");
            $arrayNota[] = new Prova($nota);
        break;

        case 2:
            $nota = readline("Informe a nota do trabalho: ");
            $arrayNota[] = new Trabalho($nota);
        break;

        case 3:
            $nota = readline("Informe a nota da participacao: ");
            $arrayNota[] = new Participacao($nota);
        break;

        default:
            echo "tudo errado";
            $i = -1;
        break;
    }
}

$mediaNota = 0;

foreach($arrayNota as $a){
    $mediaNota +=  $a->getNotaFinal();
}

$mediaNota = $mediaNota / 3;

echo $mediaNota;