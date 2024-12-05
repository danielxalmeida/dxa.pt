<main>
    <div class="container-fluid main">
        <div class="row mb-3 justify-content-end">
            <div class="col-md-11 col-12 ms-5 px-3 caixa-menu shadow-menu" id="fixview">
                <div class="caixa-menu-selecionado caps ms-md-5 mx-4 mt-5">autor</div>
                <div class="sobre-mim t1 pb-3 ms-md-5 mx-4 mt-2">sobre mim</div>
            </div>
        </div>
        <div class="row p-md-5 p-4 area-texto d-flex flex-column flex-nonwrap align-items-center">
            <div class="col-md-10 col-12 d-flex flex-column align-items-center gap-4">
                <img src="<?= getImagemAutor(); ?>" alt=" autor" class="img-autor">
                <div class="col-12 texto p1 my-3 d-none d-md-block" id="completo">
                    <?= getTextoAutor(); ?>
                </div>
                <div class="col-12 texto p1 my-3 d-md-none" id="abreviado">
                    <?= geTextoAbreviadoAutor(); ?>
                </div>
                <div class="col-12 text-md-start text-center mt-4">
                    <button class="ver-mais d-md-none p-0 m-0" onclick="verMais();"></button>
                    <br><br>
                    <button type="button" class="voltar p-0 m-0" onclick="voltAtras();"></button>
                </div>
            </div>
        </div>
    </div>
</main>