<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_cursophp";
// criando uma instância de conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Checando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "UPDATE alunos SET fone='(61)99887-1122', cidade='terezina' WHERE cod=2";

if ($conn->query($sql) === TRUE) {
  echo "Record atualizado com successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



$conn->close();


