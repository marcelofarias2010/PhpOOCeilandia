<?php

require 'ClassConexao.php';

$conn = new ClassConexao();

// query de criação do banco de dados
$sql = "CREATE DATABASE db_teste_mysqli";
// checando a query de criação do banco
if ($conn->conectaDB()->query($sql) === true) {
    echo "Database criado com sucesso";
} else {
    echo "Erro ao criar o banco: " . $conn->conectaDB()->error;
}

$conn->conectaDB()->close();

