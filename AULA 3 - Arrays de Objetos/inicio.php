<?php

class Selecao {

    //Atributos
    private $pais;
    private $tecnico;
    private $esquema;

    //Mehtodos
    public function getDados() {
        $dados = "\nPaís: " . $this->pais;
        $dados .= " | Técnico: " . $this->tecnico;
        $dados .= " | Esquema: " . $this->esquema;

        return $dados;
    }

    public function __toString(){
        return $this->getDados();
    }

    //GETs e SETs
    

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of tecnico
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set the value of tecnico
     */
    public function setTecnico($tecnico): self
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get the value of esquema
     */
    public function getEsquema()
    {
        return $this->esquema;
    }

    /**
     * Set the value of esquema
     */
    public function setEsquema($esquema): self
    {
        $this->esquema = $esquema;

        return $this;
    }
}

//Programa Principal
$brasil = new Selecao();
$brasil->setPais("Brasil");
$brasil->setTecnico("Carlo Anceloti");
$brasil->setEsquema("4-4-2");
//echo $brasil->getDados();

$arg = new Selecao();
$arg->setPais("Argentina");
$arg->setTecnico("Lionel Scaloni");
$arg->setEsquema("4-3-3");
//echo $arg->getDados();

$selecoes = array($brasil, $arg);
//print_r($selecoes);
echo "País da primeira seleção: " . $selecoes[0]->getPais() . "\n";
echo "Dados da segunda seleção: " . $selecoes[1]->getDados();

$port = new Selecao();
$port->setPais("Portugal");
$port->setTecnico("Roberto Martinez");
$port->setEsquema("4-3-3");
//$port->getDados();

array_push($selecoes, $port);

echo "\n\nDados de todas as seleções: \n";
foreach($selecoes as $s){
    echo $s;
}