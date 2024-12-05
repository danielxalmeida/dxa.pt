<main class="container my-3">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

        <div class="col-4 my-4 d-flex flex-column gap-2">
            <h3>Imagem do Autor na Página (<?= $paginamain; ?>)</h3>
            <img src="<?= getImagemAutor(); ?>" alt="">
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Texto do "Autor" da página (<?= $paginamain; ?>)</h3>
            <span class="p-2 border border-1">
                <?= getTextoAutor(); ?>
            </span>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4">
            <a class="nav-link" aria-current="page" href="autor_edit.php">
                <button class="btn btn-warning btn-sm">EDITAR AUTOR</button>
            </a>
        </div>
    </div>

</main>