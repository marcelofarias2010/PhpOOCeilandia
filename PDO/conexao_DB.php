<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_cursophpPDO";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO alunos (nome, idade, fone, cidade)
                            VALUES (:nome, :idade, :fone, :cidade)");
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':fone', $fone);
    $stmt->bindParam(':cidade', $cidade);

    $nome = "John";
    $idade = "21";
    $fone = "(61) 99887-8545";
    $cidade = "Valparaiso";
    $stmt->execute();

    $nome = "Mary";
    $idade = "28";
    $fone = "(61) 995421-8545";
    $cidade = "Ocidental";
    $stmt->execute();

    $nome = "Poly";
    $idade = "41";
    $fone = "(61) 5887-8545";
    $cidade = "Luziania";
    $stmt->execute();

    echo "New records created successfully";
} catch (PDOException $exc) {
    echo "Connection failed: " . $exc->getMessage() . "<br>";
    echo $sql . "<br>" . $exc->getMessage();
}

$conn = null;
