<?php

require_once('Poder.php');

    class Mago extends Poder{
        protected string $nome;
        protected Poder $Poder;

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
         * Get the value of Poder
         */
        public function getPoder(): Poder
        {
                return $this->Poder;
        }

        /**
         * Set the value of Poder
         */
        public function setPoder(Poder $Poder): self
        {
                $this->Poder = $Poder;

                return $this;
        }
    }