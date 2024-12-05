<main>
    <div class="container-fluid main">
        <div class="row mb-5 d-flex justify-content-end">
            <div class="col-lg-11 col-12 d-flex flex-column flex-lg-row justify-content-md-around bem-vindo shadow-menu align-items-center justify-content-center">
                <div class="col-lg-5 col-12 flex-grow-1 my-2  bem-vindo-imagem">
                    <img src="<?= getImagemHome(); ?>" alt="Foto Autor" class="w-100">
                </div>
                <div class="col-lg-7 col-12 px-md-2 ps-lg-4 d-flex flex-column py-5 pe-lg-5">
                    <div class="t1 sobre-mim pb-lg-2">
                        BEM-VINDO ao meu website
                    </div>
                    <div class="p1 mt-3 texto-bem-vindo">
                        <?= getTextoAbreviadoAutorHome() . (substr(getTextoAutorHome(), 900, 901) ? "..." : ""); ?>
                    </div>
                    <a href="autor.php" class="align-self-md-end align-self-center mt-lg-4">
                        <button class="saber-mais"></button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row ultimos-livros-titulo pe-md-5 mt-5 d-flex justify-content-end">
            <div class="col-md-11 col-12 mt-5 p-0 t1 sobre-mim">
                últimos livros
            </div>
            <div class="col-md-11 col-12 mt-4 mb-md-5 pe-md-5 p-0 p1">
                <?= getTextoUltimosLivrosHome(); ?>
            </div>
        </div>
        <div class="row ultimos-livros-cards mt-md-3 mt-0 mb-md-5 pe-md-5 d-flex  justify-content-center justify-content-md-end">
            <div class="col-md-11 col-9 pe-md-5">
                <div class="row pe-md-3 d-flex flex-wrap justify-content-evenly gap-4">

                    <?php foreach (getTodosDestaques() as $i => $d) : ?>
                        <?php if ($d["activo"] == 1) : ?>
                            <div class="col-md-3 col-11 ultimos-destaques-card d-flex flex-column flex-nowrap justify-content-between mt-4">
                                <div class="row">
                                    <div class="col-12 p-0 m-0">
                                        <img src="<?= getImagemLivro($d["id_livros"]); ?>" alt="imagem" class="w-100">
                                    </div>
                                </div>
                                <div class="row titulo-card">
                                    <div class="col-12 px-3 mt-4">
                                        <?= getTituloLivro($d["id_livros"]); ?>
                                    </div>
                                </div>
                                <div class="row p-0 categoria-card">
                                    <div class="col-12 px-3 my-2 novidade caps">
                                        <?= $d["observacao"]; ?>
                                    </div>
                                </div>
                                <div class="row texto-card">
                                    <div class="col-12 px-3 p1">
                                        <?= getTextoAbreviadoLivro($d["id_livros"]) . "..."; ?>
                                    </div>
                                </div>
                                <div class="row botao text-end my-3 mx-md-1 px-0 me-2">
                                    <div class="col-12">
                                        <a href="livros.php?livro=<?= $d["id_livros"]; ?>" class="mt-4"><button class="saber-mais"></button></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</main>