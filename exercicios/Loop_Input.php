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
        <h1>Lopp de input</h1>

        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            
            <?php
                for ($aux = 0; $aux < 10; $aux++) {
            ?>
            <label>Nome:</label>
            <input type="text" name="nome<?php echo $aux ?>"><br>
            <?php } ?>
                <input type="submit" value="Enviar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
