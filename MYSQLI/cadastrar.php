<?php
require 'ClassConexao.php';

$conn = new ClassConexao();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);
$fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO alunos (nome, idade, fone, cidade)
VALUES ('$nome', '$idade', '$fone', '$cidade')";

$result = $conn->conectaDB()->query($sql);

if($result === true){
    echo "um novo registro foi cadastrado com sucesso";
}else{
    var_dump($result);
    echo "Erro ao cadastrar o dado";
}




