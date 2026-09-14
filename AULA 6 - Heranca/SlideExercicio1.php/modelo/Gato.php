<?php

require_once('Animal.php');

    class Gato extends Animal {
        
        public function miar(){
            return "miau miau miau miau (cade a comida porra)\n";
        }
    }