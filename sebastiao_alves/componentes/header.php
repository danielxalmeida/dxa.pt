<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastiao Alves - Daniel Almeida - Home</title>
    <!-- fonts -->
    <link rel="stylesheet" href="estilos/fontes.css">
    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Estilo -->
    <link rel="stylesheet" href="estilos/estilohome.css">

    <script src="javascript/funcoes.js"></script>

</head>

<body>
    <header>
        <div class="container-fluid header p-0 m-0">
            <div class="row w-100 frente text-md-center text-start m-auto align-items-center">
                <div class="col-md-12 col-10 mt-5 mt-md-0 mt-lg-2 mt-xl-5 ps-4 titulo pb-lg-1">
                    Sebastião Alves
                </div>
                <div class="col-11 d-none d-md-inline-block mx-auto pt-0 divisoria mt-2 mt-md-0 mt-lg-1 mt-xl-2"></div>
                <div class="col-2 d-md-none mt-5 pe-4">
                    <button class="navbar-toggler p-0 m-0 align-items-center justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fechado" id="mudarbotao" onclick="mudaToggler()"></span>
                    </button>
                </div>
                <div class="col-12 position-relative p-0">
                    <nav class="navbar navbar-expand-md cabecalho caps menus p-lg-1 p-0">
                        <div class="collapse navbar-collapse justify-content-md-center align-items-center p-0" id="navbarID">
                            <ul class="navbar-nav d-flex justify-content-sm-center gap-md-4 gap-0 py-4 py-md-0 py-lg-2 mx-md-auto ps-5 ps-md-0">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($paginamain == "home" ? "active" : ""); ?>" <?= ($paginamain == "home" ? 'aria-current="page"' : ""); ?> href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($paginamain == "autor" ? "active" : ""); ?>" <?= ($paginamain == "autor" ? 'aria-current="page"' : ""); ?> href="autor.php">Autor</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown <?= ($paginamain == "livros" ? "active" : ""); ?>" <?= ($paginamain == "livros" ? 'aria-current="page"' : ""); ?> id="livros" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Livros
                                    </a>
                                    <ul class="dropdown-menu p-3 py-4 my-md-1 my-3 rounded-0 submenus">
                                        <?php foreach (getListaLivros() as $l) : ?>
                                            <?php if ($l["activo"] == 1) : ?>
                                                <li>
                                                    <a class="dropdown-item py-2 <?= ($l["id"] == $id_livro ? 'active" style="background-color: transparent;"' : ""); ?>" href="livros.php?livro=<?= $l["id"]; ?>">
                                                        <?= $l["titulo"]; ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($paginamain == "imprensa" ? "active" : ""); ?>" <?= ($paginamain == "imprensa" ? 'aria-current="page"' : ""); ?> href="imprensa.php">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($paginamain == "contactos" ? "active" : ""); ?>" <?= ($paginamain == "contactos" ? 'aria-current="page"' : ""); ?> href="contactos.php">Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-11 d-md-none mx-auto pt-0 divisoria mt-2"></div>
            </div>
            <div id="imagensLivros" class="row d-md-inline-block p-0 m-0 d-none">
                <div id="carousel-livros" class="carousel slide p-0" data-bs-ride="carousel">
                    <div class="carousel-indicators d-flex gap-3">
                        <?php $i = 0; ?>
                        <?php foreach (getTodosCarousel() as $c) : ?>
                            <?php if (intval($c["activo"]) > 0) : ?>
                                <button type="button" data-bs-target="#carousel-livros" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0 ? 'class="active" aria-current="true"' : ""); ?> aria-label="cabecalho<?= $i + 1; ?>"></button>
                            <?php else : ?>
                                <?php $i--; ?>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php $i = 0; ?>
                        <?php foreach (getTodosCarousel() as $c) : ?>
                            <?php if (intval($c["activo"]) > 0) : ?>
                                <div class="carousel-item <?= ($i == 0 ? "active" : ""); ?>">
                                    <img src="<?= $c["imagem_desktop"]; ?>" class="d-block w-100 imgcabecalho" alt="cabecalho<?= $i + 1; ?>">
                                    <div class="carousel-caption">
                                        <div class="col-3 novidade caps lato-bold mb-3">
                                            <?= $c["observacao"]; ?>
                                        </div>
                                        <div class="col-7 caps titulo-cabecalho ibm-light mb-3">
                                            <?= $c["titulo"]; ?>
                                        </div>
                                        <div class="col-7 texto-cabecalho p1 mb-3">
                                            <?= substr($c["subtitulo"], 0, 300) . "..."; ?>
                                        </div>
                                        <a href="<?= $c["link"]; ?>" class="mt-4"><button class="saber-mais"></button></a>
                                    </div>
                                </div>
                            <?php else : ?>
                                <?php $i--; ?>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div id="imagensLivrosMobile" class="row d-block p-0 m-0 d-md-none">
                <div id="carousel-livros-mobile" class="carousel slide p-0 mx-auto w-100" data-bs-ride="carousel">
                    <div class="carousel-indicators d-flex gap-3 col-11 m-0 ps-4 mx-3">
                        <?php $i = 0; ?>
                        <?php foreach (getTodosCarousel() as $c) : ?>
                            <?php if (intval($c["activo"]) > 0) : ?>
                                <button type="button" data-bs-target="#carousel-livros-mobile" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0 ? 'class="active" aria-current="true"' : ""); ?> aria-label="cabecalho<?= $i + 1; ?>"></button>
                            <?php else : ?>
                                <?php $i--; ?>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner col-12">
                        <?php $i = 0; ?>
                        <?php foreach (getTodosCarousel() as $c) : ?>
                            <?php if (intval($c["activo"]) > 0) : ?>
                                <div class="carousel-item <?= ($i == 0 ? "active" : ""); ?>">
                                    <img src="<?= $c["imagem_mobile"]; ?>" class="d-block w-100" alt="cabecalho<?= $i + 1; ?>">
                                    <div class="carousel-caption col-12 ps-4 mx-3 pe-5 mb-5">
                                        <div class="col-3 novidade caps lato-bold mb-3">
                                            <?= $c["observacao"]; ?>
                                        </div>
                                        <div class="col-12 caps titulo-cabecalho ibm-light mb-3">
                                            <?= $c["titulo"]; ?>
                                        </div>
                                        <div class="col-12 texto-cabecalho p1 mb-3">
                                            <?= substr($c["subtitulo"], 0, 300) . "..."; ?>
                                        </div>
                                        <a href="<?= $c["link"]; ?>" class="mt-4"><button class="saber-mais" value="<?= $i + 1; ?>"></button></a>
                                    </div>
                                </div>
                            <?php else : ?>
                                <?php $i--; ?>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>