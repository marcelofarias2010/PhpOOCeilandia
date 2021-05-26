<?php



class Manga extends Frutas{
    
    public function mensagem(){
        echo "Eu amo manga espada";
    }
    
    public function intro() {
        echo "Manga é bom para as vistas";
    }
    
        public function getCor() {
        return $this->cor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getValidade() {
        return $this->validade;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function setValidade($validade) {
        $this->validade = $validade;
    }
}
