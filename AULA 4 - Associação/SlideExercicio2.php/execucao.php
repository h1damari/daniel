<?php 

require_once('modelo/Turma.php');
require_once('modelo/Aluno.php');

$turma = new Turma();
$turma->setNome("Nigers");
$turma->setCurso("Informática");

$alunos = [];

for($i = 0; $i < 5; $i++){
    $aluno = new Aluno();
    $aluno->setNome(readline("Informe o nome do aluno $i: "));
    $aluno->setIdade((int) readline("Informe a idade do aluno $i: "));
    $aluno->setTurma($turma);

    $alunos[] = $aluno;
}

$turma->setAlunos($alunos);

foreach($alunos as $a){
    echo $a;
}