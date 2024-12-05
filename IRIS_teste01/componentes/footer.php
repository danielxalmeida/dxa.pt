    <footer class="container-fluid m-0 mt-5 p-0">
        <div class="row text-center m-0 p-0"><!-- NAVBAR -->
            <div class="col-md-10 mx-auto border-bottom sticky-top">

                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid d-md-flex flex-sm-column">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/IRIS_teste01/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">A IRIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/IRIS_teste01/modelos">Modelos</a>
                                    <!-- Vai para  apagina modelos, sem filtros -->
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="/IRIS_teste01/modelos">Pesquisar</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/IRIS_teste01/envios">Envios</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row m-0 p-0">
            <!-- <p class="mt-2">Linha de contactos e redes sociais.</p> -->
            <div class="col-12">
                <div class="row">
                    <div class="col-md-8 d-sm-block d-none">
                        <div class="row text-center">
                            <p>Contactos</p>
                        </div>
                        <div class="row text-center">
                            <div class="col-4">
                                <p class="titulo-contactos">
                                    TELEFONE
                                </p>
                                <p class="conteudo-contactos">
                                    <?= getContactos()["telefone"] ?>
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="titulo-contactos">
                                    Whatsapp
                                </p>
                                <p class="conteudo-contactos">
                                    <?= getContactos()["whatsapp"] ?>
                                </p>
                            </div>
                            <div class="col-4">
                                <p class="titulo-contactos">
                                    email
                                </p>
                                <p class="conteudo-contactos">
                                    <?= getContactos()["email"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center d-sm-block d-none">
                            <p>redes-sociais</p>
                        </div>
                        <div class="row d-flex justify-content-center text-center overflow-hidden">
                            <div class="col-3 overflow-hidden">
                                <p class="titulo-contactos d-sm-block d-none">
                                    <a href="<?= getContactos()["instagram"] ?>" target="_blank">instagram</a>
                                </p>
                                <!-- <p class="conteudo-contactos">
                                    <?= getContactos()["instagram"] ?>
                                </p> -->
                            </div>
                            <div class="col-3 overflow-hidden">
                                <p class="titulo-contactos d-sm-block d-none">
                                    <a href="<?= getContactos()["facebook"] ?>" target="_blank">facebook</a>
                                </p>
                                <!-- <p class="conteudo-contactos">
                                    <?= getContactos()["facebook"] ?>
                                </p> -->
                            </div>
                            <!-- <div class="col-2">
                                <p class="titulo-contactos d-sm-block d-none">
                                    Whatsapp
                                </p>
                                <p class="conteudo-contactos">
                                    <?= getContactos()["whatsapp_link"] ?>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 bg-body-secondary m-0 p-0 text-center">
            <p class="mt-2">linha de informações</p>
        </div>
    </footer>
    </body>

    </html>