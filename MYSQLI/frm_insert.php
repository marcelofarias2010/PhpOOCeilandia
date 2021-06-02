<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de cadastro</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Formulário de cadastro  </h1>
            <form class="form-horizontal" action="cadastrar.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-1" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome" placeholder="Enter com seu nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="idade">Idade:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="idade" placeholder="Enter com sua idade">
                    </div>
                    <label class="control-label col-sm-1" for="fone">Telefone:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="fone" placeholder="Enter com seu telefone">
                    </div>
                    <label class="control-label col-sm-1" for="fone">cidade:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="cidade" placeholder="Enter com sua cidade">
                    </div>                    
                </div>
                
                <div class="form-group">
                    <div class="control-label col-sm-1">
                        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
