<?php

require_once('Mago.php');

    class Curandeiro extends Mago{
        private int $forcaDeCura;

        public function lancarPoder(){

        }

        //GETs SETs

        /**
         * Get the value of forcaDeCura
         */
        public function getForcaDeCura(): int
        {
                return $this->forcaDeCura;
        }

        /**
         * Set the value of forcaDeCura
         */
        public function setForcaDeCura(int $forcaDeCura): self
        {
                $this->forcaDeCura = $forcaDeCura;

                return $this;
        }
    }