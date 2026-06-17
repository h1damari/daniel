<?php

class Aluno{

    private $nome;
    private $nota1;
    private $nota2;

    public function calcularMedia(){
        $nota = $this->nota1 + $this->nota2;
        $notaFinal = $nota / 2;

        return $notaFinal;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

//Programa Principal

$aluno = new Aluno();
$aluno->setNome(readline("Informe o nome do aluno: "));
$aluno->setNota1(readline("Informe a nota1: "));
$aluno->setNota2(readline("Informe a nota2: "));

echo "A média do aluno é: " . $aluno->calcularMedia() . "\n";