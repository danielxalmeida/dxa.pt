<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- CK EDITOR -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- Estilo BACKOFFICE -->
    <link rel="stylesheet" href="estilos/estilobackoffice.css">
    <script src="../javascript/funcoes.js"></script>

</head>

<body class="text-center mx-auto d-flex flex-column justify-content-between">
    <header class="container-fluid p-0 m-0">
        <div class="row d-flex flex-column align-items-center mx-2">
            <h1 class="col-12 font-sans-serif mb-2 mt-2 fs-1">
                Backoffice (<?= $paginamain; ?>)
            </h1>
            <div class="col-12 border border-dark"></div>
            <div class="col-12">
                <nav class="navbar navbar-expand navbar-dark">

                    <div class="container-fluid d-flex justify-content-center">
                        <div class="navbar-nav text-uppercase d-flex flex-wrap justify-content-center">
                            <a class="nav-link  <?= ($paginamain == "inicio" ? "active" : ""); ?>" <?= ($paginamain == "inicio" ? 'aria-current="page"' : ""); ?> href="inicio.php">
                                <button class="btn btn-outline-secondary btn-sm">inicio</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "carousel" ? "active" : ""); ?>" <?= ($paginamain == "carousel" ? 'aria-current="page"' : ""); ?> href="carousel.php">
                                <button class="btn btn-outline-secondary btn-sm">carousel</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "home" ? "active" : ""); ?>" <?= ($paginamain == "home" ? 'aria-current="page"' : ""); ?> href="home.php">
                                <button class="btn btn-outline-secondary btn-sm">Home</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "autor" ? "active" : ""); ?>" <?= ($paginamain == "autor" ? 'aria-current="page"' : ""); ?> href="autor.php">
                                <button class="btn btn-outline-secondary btn-sm">autor</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "livros" ? "active" : ""); ?>" <?= ($paginamain == "livros" ? 'aria-current="page"' : ""); ?> href="livros.php">
                                <button class="btn btn-outline-secondary btn-sm">livros</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "destaques" ? "active" : ""); ?>" <?= ($paginamain == "destaques" ? 'aria-current="page"' : ""); ?> href="destaques.php">
                                <button class="btn btn-outline-secondary btn-sm">destaques</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "imprensa" ? "active" : ""); ?>" <?= ($paginamain == "imprensa" ? 'aria-current="page"' : ""); ?> href="imprensa.php">
                                <button class="btn btn-outline-secondary btn-sm">imprensa</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "contactos" ? "active" : ""); ?>" <?= ($paginamain == "contactos" ? 'aria-current="page"' : ""); ?> href="contactos.php">
                                <button class="btn btn-outline-secondary btn-sm">contactos</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "redes" ? "active" : ""); ?>" <?= ($paginamain == "redes" ? 'aria-current="page"' : ""); ?> href="redes.php">
                                <button class="btn btn-outline-secondary btn-sm">redes</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "configuracoes" ? "active" : ""); ?>" <?= ($paginamain == "configuracoes" ? 'aria-current="page"' : ""); ?> href="configuracoes.php">
                                <button class="btn btn-outline-secondary btn-sm">configurações</button>
                            </a>
                            <a class="nav-link <?= ($paginamain == "sair" ? "active" : ""); ?>" <?= ($paginamain == "sair" ? 'aria-current="page"' : ""); ?> href="sair.php">
                                <button class="btn btn-outline-secondary btn-sm">sair</button>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12 border border-dark"></div>
        </div>
    </header>