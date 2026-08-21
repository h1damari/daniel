<?php

require_once('modelo/Filme.php');

$filmes = [];

for($i=0; $i<1; $i++){
    $titulo = readline("Informe o titulo do filme: ");
    $diretor = readline("Informe o diretor do tal filme: ");
    $anoLancamento = readline("Informe o ano do filme: ");
    $genero = readline("Informe o gênero do tao filme: ");

    $filme = new Filme($titulo, $diretor, $anoLancamento, $genero);
    array_push($filmes, $filme);
}

do{
    echo "1 - Busca por título\n";
    echo "2 - Busca por gênero\n";
    $opcao = readline("escolha uma opção: ");

        switch($opcao){
            case 1:
                $qual = readline("Qual o título do filme a ser pesquisado? ");
                $encontrado = false;
                
                foreach($filmes as $f){
                    if($f->getTitulo() == $qual){
                        printf($f);
                        $encontrado = true;
                    }
                }
                if($encontrado == false)
                    echo "Filme não encontrado!";

            break;

            case 2:
                $qual = readline("Qual o gẽnero do filme a ser pesquisado? ");
                $encontrado = false;
                
                foreach($filmes as $f){
                    if($f->getGenero() == $qual){
                        printf($f);
                        $encontrado = true;
                    }
                }
                if($encontrado == false)
                    echo "Filme não encontrado!";
            break;

            default:
                echo "digita direito";
            break;
        }
            
        

}while($opcao != 0);


    