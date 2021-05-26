<?php


class Morango extends Frutas{
    
    const RECEITA = "Tortas, coquiteis, doces e vitaminas são agradáveis com Morangos";
    
    public function mensagem(){
        echo self::RECEITA;
    }

    public function intro() {
        echo "Eu Amo Morango e todas suas receitas";
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

