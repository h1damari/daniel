<?php

class Pais{

    private string $nome;
    private string $continente;
    private int $titulos;

    public function __toString()
    {
        return $this->nome . ", " . $this->continente;
    }

    //GETs SETs

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of continente
     */
    public function getContinente(): string
    {
        return $this->continente;
    }

    /**
     * Set the value of continente
     */
    public function setContinente(string $continente): self
    {
        $this->continente = $continente;

        return $this;
    }

    /**
     * Get the value of titulos
     */
    public function getTitulos(): int
    {
        return $this->titulos;
    }

    /**
     * Set the value of titulos
     */
    public function setTitulos(int $titulos): self
    {
        $this->titulos = $titulos;

        return $this;
    }
}