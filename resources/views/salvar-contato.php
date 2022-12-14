<!doctype html>
<html lang="pt-BR">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastrar contato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../inc/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">

                <a href="./index.php" class="navbar-brand">Meus Contatos</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meus números</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">(68) 97911-3025</a></li>
                                <li><a class="dropdown-item" href="#">(68) 97911-3025</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Cadastrar Contatos</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex">
                    <img src="../inc/img/ohno.jpg" class="img-navbar rounded-circle" alt="">
                </div>

            </div>
        </nav>

        <div class="container-md">

            <div class="shadow rounded mt-5 px-4 py-3">
                <h3 colspan="5" class="text-center fw-bold fs-3">
                    Lista de contatos
                </h3>

                <form action="../../Http/Controllers/AcaoController.php" method="get" class="mt-3" id="form">

                    <div class="row g-2 mb-md-3 mb-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="username" id="nome" placeholder="Nome do contato">
                                <label for="username">Nome</label>
                                <div class="invalid-feedback">
                                    Informe um nome!
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="idade" id="idade" placeholder="Idade do contato">
                                <label for="idade">Idade</label>
                                <div class="invalid-feedback">
                                    Informe uma idade!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone do contato">
                                <label for="telefone">Telefone</label>
                                <div class="invalid-feedback">
                                    Informe um telefone!
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="radio" name="sexo" role="switch" id="masculino" value="masculino">
                                <label class="form-check-label" for="masculino">
                                    Masculino
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="radio" name="sexo" role="switch" id="feminino" value="feminino">
                                <label class="form-check-label" for="feminino">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="buttom" class="btn btn-indigo">Salvar</button>

                </form>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <!-- Script de validação -->
        <script src="../inc/js/validation.js"></script>
    </body>
</html>