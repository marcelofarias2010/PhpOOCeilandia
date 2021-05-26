<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <style>
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        $nome = $email = $site = $comment = $genero = "";
        $nomeErr = $emailErr = $siteErr = $commentErr = $generoErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nome"])) {
                $nomeErr = "O nome é requerido";
            } else {
                $nome = validacao($_POST["nome"]);
                // Checar se conté letras e espaços em branco
                if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
                    $nomeErr = "Só pode haver letras e espaços em branco";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "O Email é requerido";
            } else {
                $email = validacao($_POST["email"]);
                // Checar se o email possui formato padrão
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Este email tem um formato inválido";
                }
            }

            if (empty($_POST["website"])) {
                $site = "";
            } else {
                $site = validacao($_POST["website"]);
                // checar se possui uma URL válida
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $site)) {
                    $siteErr = "URL é inválida";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = validacao($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $generoErr = "é requerido um valor para o genero";
            } else {
                $genero = validacao($_POST["gender"]);
            }
        }

        function validacao($dados) {
            $dados = trim($dados);
            $dados = stripslashes($dados);
            $dados = htmlspecialchars($dados);

            return $dados;
        }
        ?>
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            Name: <input type="text" name="nome" value="<?php echo $nome; ?>">
            <span class="erro">*<?php echo $nomeErr; ?></span><br/>
            E-mail: <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="erro">*<?php echo $emailErr; ?></span><br/>
            Website: <input type="text" name="website" value="<?php echo $site ?>">
            <span class="erro">*<?php echo $siteErr; ?></span><br/>
            Comentarios:<br/> <textarea name="comment" rows="5" cols="40"><?php echo $comment ?></textarea><br/>
            Genero:<span class="erro">*<?php echo $generoErr; ?></span><br/>
            <input type="radio" name="gender" value="feminino" <?php if (isset($genero) && $genero=="feminino") echo "checked";?>>Feminino
            <input type="radio" name="gender" value="masculino" <?php if (isset($genero) && $genero=="masculino") echo "checked";?>>Masculino
            <input type="radio" name="gender" value="outros"> <?php if (isset($genero) && $genero=="outros") echo "checked";?>Outros
            <br/>
            <input type="submit" name="submit" value="Submeter">
        </form>   

        <?php
        echo "<p>Nome: $nome  </p>";
        echo "<p>E-mail: $email  </p>";
        echo "<p>Site: $site  </p>";
        echo "<p>Comentário: $comment  </p>";
        echo "<p>Sexo: $genero  </p>";
        ?>
    </body>
</html>