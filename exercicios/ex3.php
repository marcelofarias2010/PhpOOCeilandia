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
            3. Escrever um algoritmo que gera e escreve os números ímpares entre 100 e 200;
        </p>
        
        <?php
        $num1 = 100;
        $num2 = 200;
        do {
            $num1 += 1;
            echo "$num1 ,";
            $num1++;
        }while ($num1 < $num2)
        ?>
    </body>
</html>
