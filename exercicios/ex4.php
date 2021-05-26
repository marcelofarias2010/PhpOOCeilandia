<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            4. Em uma turma Cada aluno tem 2 notas. Um professor precisa calcular 
            a média das duas notas de cada aluno. Crie um programa que resolve este problema.
        </p>

        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            Nome:<input type="text" name="nome"><br>
            Nota 1:<input type="text" name="nota1"><br>
            Nota 2:<input type="text" name="nota2"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        // put your code here
        $nome = "";
        $nota1 = $nota2 = $media = 0;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];

            $media = ($nota1 + $nota2) / 2;

            echo "O aluno $nome obteve média $media";
        }
        ?>
    </body>
</html>
