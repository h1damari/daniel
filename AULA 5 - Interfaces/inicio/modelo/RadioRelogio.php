<?php

require_once('IRadio.php');
require_once('IRelogio.php');

    class RadioRelogio implements IRadio, IRelogio{
        private string $estado;

        public function __construct()
        {
            $this->estado = "Desligado";
        }

        public function ligar(){
            $this->estado = "Ligado";
        }
        public function desligar(){
            $this->estado = "Desligado";
        }
        #[Override]
        public function mostrarHora(){
            echo date("H:i:s") . "\n";
        }
        //GET SET

        /**
         * Get the value of estado
         */
        public function getEstado(): string
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado(string $estado): self
        {
                $this->estado = $estado;

                return $this;
        }
    }