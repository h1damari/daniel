<?php

class Instrumento{
    protected float $nota;

    public function __construct($nota)
    {
        $this->nota = $nota;
    }

    public function getNotaFinal() {
        return $this->nota;
    }

}