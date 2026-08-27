<?php

    class Pikachu{
        private array $ataques;
        private int $transformacao;

        public function atacar(){
            $this->ataques[] = "Choque do trovão";
            $this->ataques[] = "Bola elétrica";
            $this->ataques[] = "Cauda de ferro";

            $ataque = $this->ataques[array_rand($this->ataques)];

            return "Goku usa o " . $ataque . "!";
        }

        public function transformar(){
            if($this->transformacao == 1)
                return "Pikachu";
            if($this->transformacao == 2)
                return "Pichu";
            if($this->transformacao == 3)
                return "Raichu";
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