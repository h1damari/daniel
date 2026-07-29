<?php

require_once('Pais.php');

class Jogador{

    private string $nome;
    private string $posicao;
    private int $numero;
    private Pais $pais;

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
     * Get the value of posicao
     */
    public function getPosicao(): string
    {
        return $this->posicao;
    }

    /**
     * Set the value of posicao
     */
    public function setPosicao(string $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais(): Pais
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais(Pais $pais): self
    {
        $this->pais = $pais;

        return $this;
    }
}