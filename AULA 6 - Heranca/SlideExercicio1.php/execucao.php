<?php

require_once('modelo/Gato.php');
require_once('modelo/Cachorro.php');

$gato = new Gato();
$gato->setNome("Torrada");
$gato->setRaca("Laranja");

$gato1 = new Gato();
$gato1->setNome("miau");
$gato1->setRaca("Cinza");

$cachorro = new Cachorro();
$cachorro->setNome("nada");
$cachorro->setRaca("nada");

$cachorro1 = new Cachorro();
$cachorro1->setNome("nada");
$cachorro1->setRaca("nada");

echo $gato->getDados();
echo $gato->miar();
echo $gato1->getDados(); 
echo $gato1->miar();

echo $cachorro->getDados(); 
echo $cachorro->latir();
echo $cachorro1->getDados(); 
echo $cachorro1->latir();