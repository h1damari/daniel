<?php

require_once('Instrumento.php');

class Trabalho extends Instrumento{

    public function getNotaFinal() {
        $nota = parent::getNotaFinal() * 1.2;

        if($nota >= 10)
            return 10;
        else
            return $nota;
    }
}