<?php

abstract class Frutas {

    protected $nome;
    protected $cor;
    protected $peso;
    protected $validade;
    
 
    abstract function getNome() ;
    abstract function getCor();
    abstract function getPeso();
    abstract function getValidade();

    abstract function setNome($nome);
    abstract function setCor($cor);
    abstract function setPeso($peso);
    abstract function setValidade($validade);

    abstract function intro();
    

}
