<?php

require_once('Animal.php');

    class Cachorro extends Animal {
        
        public function latir(){
            return "au au au\n";
        }
    }