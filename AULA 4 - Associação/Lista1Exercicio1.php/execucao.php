<?php

require_once('modelo/Departamento.php');
require_once('modelo/Funcionario.php');

$funcionarios = array();

for($i=0; $i<=5; $i++){
    $funcionario = new Funcionario();
    $funcionario->setNome(readline("Infomre o nome do meliante: "));
    $funcionario->setCargo(readline("Fala o cargo que o vagabundo tem na empresa ai: "));
    $funcionario->setSalario(readline("Salário do meliante: "));

    $departamento = new Departamento();
    $departamento->setNome(readline("Nome do departamento do meliante: "));
    $departamento->setNumeroSala(readline("O numero da sala do departamento do meliante: "));
    $funcionario->setDepartamento($departamento);

    array_push($funcionarios, $funcionario);

}

foreach($funcionarios as $f){
    echo $f;
}