<?php

require_once('Mago.php');

    class Combatente extends Mago{
        private int $forcaDeAtaque;

        public function lancarPoder(){

        }
        
        //GETs SETs

        /**
         * Get the value of forcaDeAtaque
         */
        public function getForcaDeAtaque(): int
        {
                return $this->forcaDeAtaque;
        }

        /**
         * Set the value of forcaDeAtaque
         */
        public function setForcaDeAtaque(int $forcaDeAtaque): self
        {
                $this->forcaDeAtaque = $forcaDeAtaque;

                return $this;
        }
    }