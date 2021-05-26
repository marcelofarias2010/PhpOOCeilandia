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
            3 – Peça ao usuário para digitar 5 idades. Exiba quantas pessoas são 
            maiores de idade (18 anos) e quantas são menores.
        </p>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php
            $maior = $menor = 0;
            $vetor = [];
            for ($i = 0; $i < 5; $i++) {
                ?>
                Informe sua <?php echo $i + 1 ?> idade: <input type="number" name="<?php echo "num$i" ?>"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $vetor[$i] = $_POST['num' . $i];
                    if ($vetor[$i] >= 18) {
                        $maior += 1;
                        
                    }else{
                        $menor += 1;
                    }
                }
                ?>   
            <?php } ?>
            <input type="submit" value="Calcular">
        </form>
        <?php
        echo "os maiores de 18 são $maior <br>";
        echo "os menores de 18 são $menor <br>";
        ?>
    </body>
</html>
