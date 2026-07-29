<?php

require_once('modelo/Estado.php');
require_once('modelo/Cidade.php');

$cidades = array();

//estasdo
$estado0 = new Estado();
$estado0->setNome("Santa Catarina");
$estado0->setSigla("SC");

$cidade0 = New Cidade();
$cidade0->setNome("Florianópolis");
$cidade0->setEstado($estado0);
$cidade0->setQtdHabitantes(587.456);
$cidade0->setAltitude(3);
$cidades[] = $cidade0;

$cidade1 = New Cidade();
$cidade1->setNome("Blumenau");
$cidade1->setEstado($estado0);
$cidade1->setQtdHabitantes(380.597);
$cidade1->setAltitude(21);
$cidades[] = $cidade1;

//estasdo
$estado1 = new Estado();
$estado1->setNome("Paraná");
$estado1->setSigla("PR");

$cidade2 = New Cidade();
$cidade2->setNome("Foz do Iguaçu");
$cidade2->setEstado($estado1);
$cidade2->setQtdHabitantes(285.415);
$cidade2->setAltitude(164);
$cidades[] = $cidade2;

$cidade3 = New Cidade();
$cidade3->setNome("Cascavel");
$cidade3->setEstado($estado1);
$cidade3->setQtdHabitantes(368.195);
$cidade3->setAltitude(781);
$cidades[] = $cidade3;

foreach($cidades as $c){
    echo $c;
}