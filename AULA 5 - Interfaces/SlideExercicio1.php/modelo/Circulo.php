<?php

require_once('IFormaGeometrica.php');

class Circulo implements IFormaGeometrica{
    private int $raio;

    public function getArea()
    {
        return $this->raio * $this->raio;
    }

    public function getDesenho()
    {
        
    }

    /**
     * Get the value of raio
     */
    public function getRaio(): int
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}