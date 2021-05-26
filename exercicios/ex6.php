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
            1. Escreva um programa que lido um número, calcule e informe o seu fatorial.
        </p>
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            Informe um valor: <input type="number" name="num">
            <input type="submit" value="Calcular">
        </form>
        <?php
        // put your code here
        $num = $i = $fat = $aux = 0;
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $num = $_POST['num'];
            $fat = $num;
            echo " $num ! =  ";
            for($i = $num; $i>2; $i--){
                $fat = $fat * ($i - 1);
                $aux = $i;
                echo " $aux x ";                
            }
            echo " 2 = $fat ";
            echo "<br> O fatorial de $num é $fat";
        }
        ?>
    </body>
</html>
