<?php


class Dominio {
    public static $nomeEmpresa = "SENAC";

    protected static function webSite(){
        
        return "https://www.".self::$nomeEmpresa.".com.br";
    }
}
