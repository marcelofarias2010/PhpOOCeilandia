<?php


class Cachorro implements Animal{
    //put your code here
    public function emitirSom() {
        echo self::correr();
        echo "o cachorro faz auauau <br>";
    }
    
    public static function correr(){
        echo "o cacorro corre a 60km/h <br>";
    }

}
