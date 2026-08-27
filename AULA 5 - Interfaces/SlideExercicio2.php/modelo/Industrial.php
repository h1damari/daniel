<?php

    class Industrial{
        private int $consumo;

        public function getValorFatura(){
            $valor0 = 1.80;
            $valor1 = 2.30;
            
            if($this->consumo <= 500)
                return $valor0 * $this->consumo;
            else
                return $valor1 * $this->consumo;
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