<?php

class ClassConexao {

    public function conectaDB() {
        try {
            $conn = new mysqli("localhost", "root", "","db_cursophp");
            return $conn;
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
    }

    
}
