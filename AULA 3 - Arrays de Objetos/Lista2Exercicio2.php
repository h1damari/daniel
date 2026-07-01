<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePaginas;
    private $valorPago;


    public function __toString()
    {
        return "Título: " . $this->titulo . "\n" .
               "Autor: " . $this->autor . "\n" .
               "Gênero: " . $this->genero . "\n" .
               "Quantidade de Páginas: " . $this->quantidadePaginas . "\n" .
               "Valor Pago: " . $this->valorPago . "\n";
    }
    //GET e SET

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of quantidadePaginas
     */
    public function getQuantidadePaginas()
    {
        return $this->quantidadePaginas;
    }

    /**
     * Set the value of quantidadePaginas
     */
    public function setQuantidadePaginas($quantidadePaginas): self
    {
        $this->quantidadePaginas = $quantidadePaginas;

        return $this;
    }

    /**
     * Get the value of valorPago
     */
    public function getValorPago()
    {
        return $this->valorPago;
    }

    /**
     * Set the value of valorPago
     */
    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }
}

do{
    echo "BEM VINDO AO SISTEMA DE LIVROS\n\n";
    echo "1 - Adicionar Livro\n";
    echo "2 - Listar Livros\n";
    echo "3 - Buscar Livro\n";
    echo "4 - Total Gasto\n";
    echo "0 - Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch($opcao){
        case 1:
            $livro = new Livro();
            $livro->setTitulo(readline("Digite o título do livro: "));
            $livro->setAutor(readline("Digite o autor do livro: "));
            $livro->setGenero(readline("Digite o gênero do livro: "));
            $livro->setQuantidadePaginas(readline("Digite a quantidade de páginas do livro: "));
            $livro->setValorPago(readline("Digite o valor pago pelo livro: "));

            $livros[] = $livro;
            echo "Livro adicionado com sucesso!\n\n";
            break;

        case 2:
            foreach($livros as $l){
                echo $l;
            }
            break;
        
        case 3:
            $indice = readline("Digite o índice do livro que deseja buscar: ");
                if(isset($livros[$indice])){
                    echo $livros[$indice];
                } else {
                    echo "Índice inválido!\n\n";
                }
            break;

        case 4:
            foreach($livros as $l){
                $totalGasto += $l->getValorPago();
            }
            echo "Total gasto com livros: R$ " . $totalGasto . "\n\n";
            break;
        case 0:
            echo "Saindo do sistema...\n";
            break;
    }
} while($opcao != 0);