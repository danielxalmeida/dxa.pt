<main class="container my-5">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Telefone</h3>
            <p class="p-2 border border-1"><?= getContactos("telefone"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>WhatsApp</h3>
            <p class="p-2 border border-1"><?= getContactos("whatsapp"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Catalogo WhatsApp</h3>
            <p class="p-2 border border-1"><?= getContactos("whatsapp_link"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>E-mail</h3>
            <p class="p-2 border border-1"><?= getContactos("email"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Facebook</h3>
            <p class="p-2 border border-1"><?= getContactos("facebook"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Instagram</h3>
            <p class="p-2 border border-1"><?= getContactos("instagram"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4 d-flex flex-column gap-2">
            <h3>Morada</h3>
            <p class="p-2 border border-1"><?= getContactos("morada"); ?></p>
        </div>
        <div class="col-11 border border-tertiary"></div>
        <div class="col-8 my-4">
            <a class="nav-link" aria-current="page" href="contactos_edit">
                <button class="btn btn-warning btn-sm">EDITAR CONTACTOS</button>
            </a>
        </div>
    </div>

</main>