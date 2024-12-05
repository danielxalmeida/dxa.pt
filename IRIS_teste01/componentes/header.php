<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - IRIS</title>
    <!-- BootStrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- BootStrap Icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="/IRIS_teste01/estilos/estilo.css">
    <!-- FAvIcon -->
    <link rel="shortcut icon" href="/IRIS_teste01/imagens/faviconiris.ico" type="image/x-icon">
</head>

<body class="p-0 m-0">
    <header class="container-fluid p-0 m-0">
        <div class="row w-100 bg-body-secondary m-0 p-0 text-center">
            <p class="mt-2">linha de informações</p>
        </div>
        <div class="row text-center p-0 m-0">
            <div class="col-sm-10 mx-auto border-bottom sticky-top">
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid d-block d-sm-flex flex-sm-column">
                        <!-- Logo IRIS -->
                        <a class="navbar-brand" href="/IRIS_teste01/home">
                            <img src="/IRIS_teste01/imagens/iris_fundo.jpg" id="IRIS-navbar" alt="Logo IRIS">
                        </a>
                        <br>
                        <button class="navbar-toggler p-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            Menu
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/IRIS_teste01/home">Home</a>
                                    <i class="bi bi-arrow-left-square d-sm-none"></i>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/IRIS_teste01/iris">A IRIS</a>
                                    <i class="bi bi-arrow-left-square d-sm-none"></i>
                                </li>
                                <li class="nav-item dropdown flex-column p-0">
                                    <button class="nav-link d-flex py-0" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <p class="">
                                            Modelos
                                        </p>
                                        <i class="bi bi-arrow-down-square d-sm-none"></i>
                                    </button>

                                    <ul class="dropdown-menu p-0">
                                        <?php foreach (getModelos() as $i => $d) : ?>
                                            <li class="dropmenu">
                                                <a class="dropdown-item" href="/IRIS_teste01/modelos?cat2=<?= $d["modelo"] ?>"><?= $d["modelo"] ?></a>
                                                <i class="bi bi-arrow-left-square d-sm-none"></i>
                                            </li>
                                        <?php endforeach; ?>
                                        <li class="dropmenu">
                                            <a class="dropdown-item border-top" href="/IRIS_teste01/modelos">Todos</a>
                                            <i class="bi bi-arrow-left-square d-sm-none"></i>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/IRIS_teste01/envios">Envios</a>
                                    <i class="bi bi-arrow-left-square d-sm-none"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>