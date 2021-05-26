<?php


class EmpresaX extends Dominio{
    public $site;
    public $empresa;


    public function __construct() {
        $this->site = parent::webSite();
        $this->empresa = parent::$nomeEmpresa;
    }
}
