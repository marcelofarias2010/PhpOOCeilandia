<?php

require 'Felinos.php';

class Gato extends Felinos implements Animal{
    private $salto;
    
    public function __construct() { 
        $this->salto = parent::saltar();
    }
    public function emitirSom() {        
        echo "o gato mia  miau miau miau <br>";
    }

    
}
