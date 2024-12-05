<main class="container my-5">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Telefone</h3>
            <p class="p-2 border border-1"><?= getContactos("telefone"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Morada</h3>
            <p class="p-2 border border-1"><?= getContactos("morada"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>E-mail</h3>
            <p class="p-2 border border-1"><?= getContactos("email"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Horário</h3>
            <p class="p-2 border border-1"><?= getContactos("horario"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4">
            <a class="nav-link" aria-current="page" href="contactos_edit.php">
                <button class="btn btn-warning btn-sm">EDITAR CONTACTOS</button>
            </a>
        </div>
    </div>

</main>