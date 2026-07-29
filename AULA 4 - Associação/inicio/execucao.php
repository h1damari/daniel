<?php

require_once('modelo/Pais.php');
require_once('modelo/Jogador.php');

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("América");
$pais->setTitulos(5);
//print_r($pais);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setPosicao("Atacante");
$jogador->setNumero(10);
$jogador->setPais($pais);
// print_r($jogador);

echo "Nome do jogador: " .  $jogador->getNome() . "\n";
echo "Posição do jogador: " .  $jogador->getPosicao() . "\n";
echo "Número do jogador: " .  $jogador->getNumero() . "\n";
echo "País do jogador: " . $jogador->getPais() . "\n";