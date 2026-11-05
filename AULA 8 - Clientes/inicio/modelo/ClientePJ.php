<?php

require_once("Cliente.php");

class ClientePJ extends Cliente{
    private int $razaoSocial;
    private string $cnpj;

    public function getNome(){
        return $this->razaoSocial;
    }

    public function getNroDoc(){
        return $this->cnpj;
    }

    public function getTipo(){
        return "Pessoa Jurídica";
    }

    //GETs SETs

    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial(): int
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial(int $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}