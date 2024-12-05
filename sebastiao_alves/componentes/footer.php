<footer>
    <div class="container-fluid footer mt-1">
        <div class="row mb-5">
            <div class="col-11 mb-2 mt-5 m-auto pt-0 divisoria">
            </div>
            <div class="col-12">
                <nav class="navbar navbar-expand d-none d-md-block caps">
                    <div class="collapse navbar-collapse" id="navbarID">
                        <ul class="navbar-nav d-flex justify-content-center mx-auto gap-4 rodape">
                            <li class="nav-item">
                                <a class="nav-link <?= ($paginamain == "home" ? "active" : ""); ?>" <?= ($paginamain == "home" ? 'aria-current="page"' : ""); ?> href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($paginamain == "autor" ? "active" : ""); ?>" <?= ($paginamain == "autor" ? 'aria-current="page"' : ""); ?> href="autor.php">Autor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($paginamain == "livros" ? "active" : ""); ?>" <?= ($paginamain == "livros" ? 'aria-current="page"' : ""); ?> href="#livros" onclick="dropMenu();">Livros</a>
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
            <div class="col-11 my-2 m-auto pt-0 d-none d-md-block divisoria">
            </div>
        </div>
    </div>
    <div class="container-lg contactos">
        <div class="row ms-lg-5 text-lg-start text-center justify-content-center d-flex flex-column flex-md-row">
            <div class="col-lg-6 <?= ($paginamain == "contactos" ? "d-none d-md-block" : "") ?> mb-md-1 mb-4 mt-md-1 mt-4">
                <div class="row titulo-contacto caps mb-md-3 mb-3">
                    <div class="col-12">
                        Contactos
                    </div>
                </div>
                <div class="row mx-2 mx-lg-0 d-flex align-content-md-start justify-content-md-start justify-content-center">
                    <div class="col-md-5 col-12">
                        <p class="titulo-campo novidade mb-1 caps">
                            Morada
                        </p>
                        <p class="campo-rodape p1">
                            <?= getContactos("morada"); ?>
                        </p>
                    </div>
                    <div class="col-md-3 col-12">
                        <p class="titulo-campo mb-1 novidade caps">
                            Telefone
                        </p>
                        <p class="campo-rodape p1">
                            <?= getContactos("telefone"); ?>
                        </p>
                    </div>
                    <div class="col-md-2 col-12">
                        <p class="titulo-campo mb-1 novidade caps">
                            email
                        </p>
                        <p class="campo-rodape p1">
                            <?= getContactos("email"); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 redes mt-md-0 mt-5">
                <div class="row titulo-contacto text-center">
                    <div class="col-12 caps">
                        siga-me nas redes sociais
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-md-4 mt-4 p-2 d-flex justify-content-center gap-4 redes2">
                        <a href="<?= getRedes("instagram"); ?>" target="_blank"><button id="instagram" class="botao-redes"></button></a>
                        <a href="<?= getRedes("facebook"); ?>" target="_blank"><button id="facebook" class="botao-redes"></button></a>
                        <a href="<?= getRedes("linkedin"); ?>" target="_blank"><button id="linkedin" class="botao-redes"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg outros mb-5">
        <div class="row ms-md-5 mt-5 justify-content-center">
            <div class="col-md-11 col-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="col-md-5 col-12 d-flex justify-content-md-start justify-content-evenly gap-md-5 gap-3 mb-4 mt-md-0 mt-4">
                    <a href="https://www.livroreclamacoes.pt/Inicio/"><img src="uploads/carregamentos/imagens/SVG/livroreclamacoes.svg" alt="Livro de Reclamações"></a>
                    <a href="https://www.consumidor.gov.pt/parceiros/sistema-de-defesa-do-consumidor/entidades-de-resolucao-alternativa-de-litigios-de-consumo.aspx"><img src="uploads/carregamentos/imagens/SVG/ralc.svg" alt="Resolução Alternativa de Litigios"></a>
                </div>
                <div class="col-md-5 col-12 text-center p1 mt-md-0 mt-4 mb-4 ">
                    Trabalho final
                    <br>
                    Sebastião Alves - feito por Daniel Almeida.
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="javascript/main.js"></script>
</body>

</html>