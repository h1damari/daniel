<?php

require_once('Instrumento.php');

class Prova extends Instrumento{

    public function getNotaFinal() {
        $nota = parent::getNotaFinal() * 1.3;

        if($nota >= 10)
            return 10;
        else
            return $nota;
    }
}