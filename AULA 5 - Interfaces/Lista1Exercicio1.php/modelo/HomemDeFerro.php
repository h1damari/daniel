<?php

    class HomemDeFerro{
        private array $ataques;
        private int $transformacao;

        public function atacar(){
            $this->ataques[] = "Laser do elemento químico novo";
            $this->ataques[] = "Soco seco";
            $this->ataques[] = "Lapada seca de costas (jarvis)";

            $ataque = $this->ataques[array_rand($this->ataques)];

            return "Homem de Ferro usa o " . $ataque . "!";
        }

        public function transformar(){
            if($this->transformacao == 1)
                return "Homem de Ferro cinza";
            if($this->transformacao == 2)
                return "Homem de Ferro vermelho";
            if($this->transformacao == 3)
                return "Homem de Ferro Patriora nanotecnológico";
        }

        //GETs SETs

        /**
         * Get the value of ataque
         */
        public function getAtaque(): array
        {
                return $this->ataques;
        }

        /**
         * Set the value of ataque
         */
        public function setAtaque(array $ataques): self
        {
                $this->ataques = $ataques;

                return $this;
        }

        /**
         * Get the value of transformacao
         */
        public function getTransformacao(): int
        {
                return $this->transformacao;
        }

        /**
         * Set the value of transformacao
         */
        public function setTransformacao(int $transformacao): self
        {
                $this->transformacao = $transformacao;

                return $this;
        }
    }