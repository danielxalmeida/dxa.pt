<main class="container my-3">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Titulo a mostrar na página (<?= $paginamain; ?>)</h3>
            <span class="p-2 border border-1">
                <?= getTituloEnvios(); ?>
            </span>
        </div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Data a mostrar na página (<?= $paginamain; ?>)</h3>
            <span class="p-2 border border-1">
                <?= getDataEnvios(); ?>
            </span>
        </div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Texto da página (<?= $paginamain; ?>)</h3>
            <span class="p-2 border border-1">
                <?= getTextoEnvios(); ?>
            </span>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4">
            <a class="nav-link" aria-current="page" href="envios_edit">
                <button class="btn btn-warning btn-sm">EDITAR ENVIOS</button>
            </a>
        </div>
    </div>

</main>