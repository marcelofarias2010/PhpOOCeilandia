<?php
require 'ClassConexao.php';

$conn = new ClassConexao();
// criando a query de criação da tabela
$sql = "CREATE TABLE alunos ("
        . "cod int primary key auto_increment, "
        . "nome varchar(120), "
        . "idade int, "
        . "fone varchar(20), "
        . "cidade varchar(120))";
// checando a query de criação da tabela
if ($conn->conectaDB()->query($sql) === true) {
    echo "Tabela criada com sucesso";
} else {
    echo "Error ao criar a Tabela: " . $conn->conectaDB()->error;
}
 //fechando a conexão com o banco
$conn->conectaDB()->close();



