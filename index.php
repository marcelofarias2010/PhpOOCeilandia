<?php
include './includes/header.php';
?>

<main class="container my-5">
    <section id="Novidades" class="my-5">
        <h2 class="text-center my-5">Novidades</h2>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imgs/1248.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imgs/1325.jpg" alt="Segundo Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </section>
    <section id="Categorias" class="my-5">
        <h2 class="text-center my-5">Categorias</h2>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1479064555552-3ef4979f8908?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="Imagem de capa do card">
                <div class="card-body">
                    <h3 class="card-title">Masculino</h3>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam rem impedit alias hic? A, accusantium incidunt eveniet nobis illo delectus cumque ex dolor, voluptatibus commodi quia, deserunt omnis veritatis.</p>
                    <a href="masculino.html" class="btn btn-outline-dark">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1548082644-d30472ade6be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=732&q=80" alt="Imagem de capa do card">
                <div class="card-body">
                    <h3 class="card-title">Feminino</h3>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam rem impedit alias hic? A, accusantium incidunt eveniet nobis illo delectus cumque ex dolor, voluptatibus commodi quia, deserunt omnis veritatis.</p>
                    <a href="feminino.html" class="btn btn-outline-dark">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="https://image.freepik.com/free-photo/baby-clothes_1220-4293.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h3 class="card-title">Infantil</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aliquid exercitationem officiis possimus incidunt! Mollitia aut consectetur deserunt aperiam! Officia laudantium dolorum numquam quisquam repudiandae obcaecati perspiciatis
                        quos laborum iusto.</p>
                    <a href="#" class="btn btn-outline-dark">Ver produtos</a>
                </div>
            </div>
        </div>
    </section>
    <section id="Cadastro" class="my-5">
        <div class="row">
            <div class="col">
                <a class="btn btn-outline-dark btn-block my-5" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h2>Cadastro</h2>
                </a>
            </div>
        </div>
        <form class="collapse" id="collapseExample">
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Insira seu nome" required>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="sobrenome">Sobrenome</label>
                    <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-md-4">
                    <label for="cpf">CPF</label>
                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Sem pontos e traços" required>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label for="nasc">Data de nascimento</label>
                    <input class="form-control" type="date" name="nasc" id="nasc" required>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label for="tel">Telefone</label>
                    <input class="form-control" type="text" name="tel" id="tel" placeholder="Com DDD, apenas números" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-md-4">
                    <label for="cep">CEP</label>
                    <input class="form-control" type="text" name="cep" id="cep" placeholder="Apenas números" required>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label for="end">Endereço</label>
                    <input class="form-control" type="text" name="end" id="end" placeholder="Rua, Avenida, Número" required>
                </div>
                <div class="form-group col-12 col-md-4">
                    <label for="uf">Estado</label>
                    <select class="form-control custom-select" name="uf" id="uf" required>
                        <option value="" selected>Escolha a UF</option>
                        <option value="sp">SP</option>
                        <option value="rj">RJ</option>
                        <option value="es">ES</option>
                        <option value="mg">MG</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Insira seu email" required>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Mínimo 8 caracteres" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="info">Informações adicionais</label>
                    <textarea class="form-control" name="info" id="info" rows="3"></textarea>
                </div>
                <div class="form-group form-check form-check-inline col my-5">
                    <label id="label" class="form-check-label">Forma de pagamento</label>
                    <input class="form-check-input form-control" type="radio" name="pagamento" id="cre" required>
                    <label class="form-check-label opcao" for="cre">Crédito</label>
                    <input class="form-check-input form-control" type="radio" name="pagamento" id="deb" required>
                    <label class="form-check-label opcao" for="deb">Débito</label>
                    <input class="form-check-input form-control" type="radio" name="pagamento" id="bol" required>
                    <label class="form-check-label opcao" for="bol">Boleto</label>
                </div>
            </div>
            <div class="row">
                <div class="form-group col"><input class="btn btn-outline-dark btn-block" type="submit" value="Enviar"></div>
                <div class="form-group col"><input class="btn btn-outline-secondary btn-block" type="reset" value="Limpar"></div>
            </div>
        </form>
    </section>
</main>

<?php
include './includes/footer.php';
?>
