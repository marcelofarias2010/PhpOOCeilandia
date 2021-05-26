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
            2. Escrever um algoritmo que imprima a tabuada de um número informado pelo usuário;
        </p>
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <p>Informe um número e obtenha a sua tabuada</p>
            <input type="number" name="num">
            <input type="submit" value="Calcular"><br><br>
        </form>
        <?php
        // put your code here
        $num1 = 0;
        $i = 1;
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $num1 = $_POST['num'];
            
            while ($i <= 10){
                $resul = $num1 * $i;
                echo "$num1 x $i = $resul <br>";
                $i++;
            }
        }
        ?>
    </body>
</html>
