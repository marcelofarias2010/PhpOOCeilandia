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
            1 – Calcule a média de 10 números digitados pelo usuário.
        </p>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php
            $media = 0;
            $vetor = [];
            for ($i = 0; $i < 10; $i++) {
                ?>
                Valor <?php echo $i + 1 ?>: <input type="number" name="<?php echo "num$i" ?>"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $vetor[$i] = $_POST['num' . $i];
                    $media = array_sum($vetor) / 10;
                }
                ?>   
            <?php } ?>
            <input type="submit" value="Calcular">
        </form>
        <?php
        echo "A média dos 10 valores é $media";
        ?>
    </body>
</html>
