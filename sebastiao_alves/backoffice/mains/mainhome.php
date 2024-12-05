<main class="container my-5">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

        <div class="col-4 my-4 d-flex flex-column gap-2">
            <h3>Imagem do Autor</h3>
            <img src="<?= getImagemHome(); ?>" alt="">
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Texto da area "Bem-Vindos"</h3>
            <span class="p-2 border border-1">
                <?= getTextoAutorHome(); ?>
            </span>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Link do botão "saber mais"</h3>
            <p class="p-2 border border-1">
                <?= getLinkHome(); ?>
            </p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4 d-flex flex-column gap-2">
            <h3>Texto do "Últimos livros"</h3>
            <span class="p-2 border border-1">
                <?= getTextoUltimosLivrosHome(); ?>
            </span>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-10 my-4">
            <a class="nav-link" aria-current="page" href="">
                <form action="home_edit.php">
                    <button class="btn btn-warning btn-sm">EDITAR HOME</button>
                </form>
            </a>
        </div>
    </div>

</main>