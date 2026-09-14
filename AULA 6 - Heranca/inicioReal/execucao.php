<?php

require_once('modelo/Professor.php');
require_once('modelo/Aluno.php');

$aluno = new Aluno();
$aluno->setNome("Carambolas");
$aluno->setRg("01395844752");
$aluno->setIdade(22);
$aluno->setMatricula("0133695");

echo $aluno;

$professor = new Professor("Daniel", "0184181", 99);
$professor->setSalario(16151515);

echo "\n" . $professor;