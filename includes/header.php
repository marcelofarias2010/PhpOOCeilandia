<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RITZY | Fashion Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <header class="py-3">
        <h1 class="text-center py-5">RITZY</h1>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
        <a class="navbar-brand" href="index.html">
            <img src="imgs/registered.png" width="30" height="30" class="d-inline-block align-top" alt=""> RITZY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre.html">Sobre</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="masculino.html">Masculino</a>
                        <a class="dropdown-item" href="feminino.html">Feminino</a>
                        <a class="dropdown-item" href="#">Infantil</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#Cadastro">Cadastro</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 collapse" type="search" placeholder="Pesquisar" aria-label="Pesquisar" id="collapseExample2">
                <a class="icon" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    <i class="fas fa-search"></i>
                </a>
            </form>
        </div>
        <div class="ml-2">
            <a class="icon" href="carrinho.html"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <div class="ml-3">
            <div class="dropdown dropleft">
                <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <div class="dropdown-menu">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@exemplo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                          Lembrar-me
                        </label>
                        </div>
                        <button type="submit" class="btn btn-secondary">Entrar</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html#Cadastro">Novo por aqui? Cadastre-se.</a>
                    <a class="dropdown-item" href="recupera-senha.html">Esqueci a senha</a>
                </div>
            </div>
            <!-- <a href="#" class="btn btn-outline-dark my-2 my-sm-0" type="submit">Login</a>-->
        </div>
    </nav>
