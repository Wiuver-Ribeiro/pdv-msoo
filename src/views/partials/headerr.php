<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDV-RIBEIRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dba7af9f9b.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <strong class="text-secondary">PDV RIBEIRO</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" aria-current="page" href="<?= $base.'/';?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $base.'/usuarios';?>">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $base.'/fornecedores';?>">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= $base.'/pagamentos';?>">Formas de PGTOS</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= $base.'/produtos'; ?>">Cadastro de Produtos</a></li>
                            <li><a class="dropdown-item" href="<?= $base.'/categorias';?>">Cadastro de Categorias</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= $base.'/compras';?>">Lista de Compras</a></li>
                            <li><a class="dropdown-item" href="<?= $base.'/estoque'; ?>">Estoque Baixo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vendas/Caixas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= $base.'/vendas';?>">Vendas</a></li>
                            <li><a class="dropdown-item" href="<?= $base.'/caixas';?>">Caixas</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Relatório de Produtos</a></li>
                            <li><a class="dropdown-item" href="#">Relatório de Compras</a></li>
                            <li><a class="dropdown-item" href="#">Relatório de Vendas</a></li>
                        </ul>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img-fluid border border-dark rounded-circle" src="<?php echo $base . '/assets/img/avatar.png'; ?>" alt="Avatar" style="width:50px; height:50px; object-fit:contain">
                                Administrador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                                <li><a class="dropdown-item" href="<?= $base.'/logout' ;?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>