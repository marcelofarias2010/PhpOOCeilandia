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
            4 – Peça ao usuário para digitar 5 nomes. Exiba na tela todos os nomes
            digitados, porém de maneira invertida (do último para o primeiro).
        </p>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php
            $vetor = [];
            for ($i = 0; $i < 5; $i++) {
                ?>
                Valor <?php echo $i + 1 ?>: <input type="text" name="<?php echo "num$i" ?>"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $vetor[$i] = $_POST['num' . $i];
                    sort($vetor);
                }
                ?>   
            <?php } ?>
            <input type="submit" value="Calcular">
        </form>
        <?php
        
        foreach ($vetor as $value) {
            echo "$value<br>";
        }
        ?>

    </body>
</html>
