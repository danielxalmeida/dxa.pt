<main>
    <div class="container-fluid main p-0 m-0">
        <div class="row p-0 m-0 mb-3 justify-content-end">
            <div class="col-md-11 col-12 ms-5 px-3 caixa-menu shadow-menu" id="fixview">
                <div class="caixa-menu-selecionado caps ms-md-5 mx-4 mt-5">livros</div>
                <div class="sobre-mim t1 ms-md-5 mx-4 mt-2 pb-3"><?= getTituloLivro($id_livro); ?></div>
            </div>
        </div>
        <div class="row mt-5 mt-lg-1 p-md-5 pb-md-0 p-2 m-0 area-texto d-flex flex-column align-items-center">
            <div class="col-md-10 col-12 mx-0 px-0 d-flex flex-column align-items-center gap-4">
                <div class="row m-0 p-0 d-inline-block">
                    <div class="col-12">
                        <img src="<?= getImagemLivro($id_livro); ?>" alt=" autor" class="imagem-livro m-4 ms-0">
                    </div>
                    <div class="col-12 texto-normal p1 m-0 p-0">
                        <?= getTextoLivro($id_livro); ?>
                        <br>
                        <?= getDetalhesLivro($id_livro); ?>
                    </div>
                    <div class="col-md-11 text-end w-100 d-md-block d-none">
                        <button type="button" class="voltar p-0 m-0" onclick="voltAtras();"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>