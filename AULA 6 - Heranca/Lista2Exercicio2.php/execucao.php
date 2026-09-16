<?php

require_once('modelo/Curandeiro.php');
require_once('modelo/Combatente.php');
require_once('modelo/Poder.php');


// Poderes de cura
$recuperaEnergia = new Poder();
$recuperaEnergia->setDescricao("Recupera energia")->setForca(0);

$recuperaEnergiaSuper = new Poder();
$recuperaEnergiaSuper->setDescricao("Recupera energia super")->setForca(20);

// Poderes de ataque
$golpeNormal = new Poder();
$golpeNormal->setDescricao("Golpe normal")->setForca(0);

$golpeEspecial = new Poder();
$golpeEspecial->setDescricao("Golpe especial")->setForca(15);


// Mago curandeiro
$curandeiro = new Curandeiro();
$curandeiro->setNome("Policia")
           ->setForcaDeCura(50)
           ->setPoder($recuperaEnergiaSuper);

$curandeiro->lancarPoder();


// Mago combatente
$combatente = new Combatente();
$combatente->setNome("Negro")
           ->setForcaDeAtaque(80)
           ->setPoder($golpeEspecial);

$combatente->lancarPoder();