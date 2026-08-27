<?php

    class Residencial{
        private int $consumo;

        public function getValorFatura(){
            $valor = 1.05;
            return $valor * $this->consumo;
        }

        //GETS SETS

        /**
         * Get the value of consumo
         */
        public function getConsumo(): int
        {
                return $this->consumo;
        }

        /**
         * Set the value of consumo
         */
        public function setConsumo(int $consumo): self
        {
                $this->consumo = $consumo;

                return $this;
        }
    }

