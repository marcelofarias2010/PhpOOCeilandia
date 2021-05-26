<?php

echo "recebendo dados do formulário <br>";

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;

echo "A média do aluno é $media";