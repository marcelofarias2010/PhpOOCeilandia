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
            2 - Digite 5 números e verifique qual é o maior.
        </p>
        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php
            $maior = 0;
            $vetor = [];
            for ($i = 0; $i < 5; $i++) {
                ?>
                Valor <?php echo $i + 1 ?>: <input type="number" name="<?php echo "num$i" ?>"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $vetor[$i] = $_POST['num' . $i];
                    if($vetor[$i] > $maior){
                        $maior = $vetor[$i];
                    }
                }
                ?>   
            <?php } ?>
            <input type="submit" value="Calcular">
        </form>
        <?php
        echo "O maior valor é $maior";
        ?>
    </body>
</html>
