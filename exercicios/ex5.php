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
            5. Escreva um algoritmo que leia 5 valores inteiros e encontre o maior e o menor deles. 
        </p>
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php
            $maior = $n1 = $n2 = $n3 = $n4 = $n5 = 0;
            $menor = 1000000000;
            $i = 0;
            while ($i < 5) {
                ?>
                Valor <?php echo $i + 1 ?>: <input type="number" name="<?php echo "n$i" ?>"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $n1 = $_POST['n0'];
                    $n2 = $_POST['n1'];
                    $n3 = $_POST['n2'];
                    $n4 = $_POST['n3'];
                    $n5 = $_POST['n4'];
                }
                $i++;
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
        
        if ($n1 > $maior) {
            $maior = $n1;
        }
        if ($n2 > $maior) {
            $maior = $n2;
        }
        if ($n3 > $maior) {
            $maior = $n3;
        }
        if ($n4 > $maior) {
            $maior = $n4;
        }
        if ($n5 > $maior) {
            $maior = $n5;
        }
        echo "O maior é $maior <br>";

        if ($n1 < $menor) {
            $menor = $n1;
        }
        if ($n2 < $menor) {
            $menor = $n2;
        }
        if ($n3 < $menor) {
            $menor = $n3;
        }
        if ($n4 < $menor) {
            $menor = $n4;
        }
        if ($n5 < $menor) {
            $menor = $n5;
        }
        echo "O menor é $menor <br>";
        
        ?>
    </body>
</html>
