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
        <p>1. Faça um algoritmo que escreva na tela os números de um número inicial
            a um número final. Os números inicial e final devem ser informados pelo usuário;
        </p>
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            Número inicial:<input type="number" name="inicio"><br>
            Número Final:<input type="number" name="final"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        $ini = $fim = 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ini = $_POST['inicio'];
            $fim = $_POST['final'];

            while ($ini <= $fim) {
                echo $ini . ", ";
                $ini++;
            }
        }
        ?>
    </body>
</html>
