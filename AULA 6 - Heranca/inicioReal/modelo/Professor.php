<?php

require_once('Pessoa.php');

    class Professor extends Pessoa {
        private float $salario;

        public function __toString()
        {
            return "Nome: " . $this->getNome() . " | RG: " . $this->getrg() . " | Idade: " . $this->getIdade()  . " | $this->salario";
        }


        //GETs SETs

        /**
         * Get the value of salario
         */
        public function getSalario(): float
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         */
        public function setSalario(float $salario): self
        {
                $this->salario = $salario;

                return $this;
        }
    }