<?php declare(strict_types=1); 

function exibirMensagem() {
    echo "<h1 style='color:red'>Hello Word!</h1>";
}

function nomeFamilia($Nome, $sobrenome) {
    echo "$Nome $sobrenome <br>";
}

function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

function addNumbers(int $a, int $b) {
    return $a + $b;
}

function altura(int $minhaAltura = 2) {
  echo "A minha altura é : $minhaAltura <br>";
}

function soma (int $valor1, int $valor2): float{
    $result = $valor1 + $valor2;
    return (float)$result;
}

//$resultado = soma(10, 30);

echo "O resultado da soma é ".soma(8, 3);