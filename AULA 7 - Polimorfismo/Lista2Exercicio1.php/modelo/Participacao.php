<?php

require_once('Instrumento.php');

class Participacao extends Instrumento{


    public function getNotaFinal() {
        $nota = parent::getNotaFinal();

        if($nota >= 10)
            return 10;
        else
            return $nota;
    }
}