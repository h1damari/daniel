<?php

    class Pessoa{

        //Atributos
        public $nome;
        public $endereco;
        public $cidade;
        public $uf;
        public $altura;

        function falarOla(){
            echo "\nOlá mundo, sou $this->nome.\n";
        }

        function falarEndereco(){
            echo "Moro em $this->endereco, $this->cidade, $this->uf.\n";
        }

        function falarAltura(){
            echo "Tenho altura $this->altura metros!\n";
        }
    }

//Programa Principal

$pessoa1 = new Pessoa();
$pessoa1->nome = readline("fala o seu nome ai: ");
$pessoa1->endereco = readline("fala seu endereco ai: ");
$pessoa1->cidade = readline ("fala sua cidade ai: ");
$pessoa1->uf = readline("fala seu estado ai: ");
$pessoa1->altura = readline("fala sua altura ai: ");

$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();
