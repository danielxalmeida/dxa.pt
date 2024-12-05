<main>
    <div class="container-fluid main">
        <div class="row mb-3 justify-content-end">
            <div class="col-md-11 col-12 ms-5 px-3 caixa-menu shadow-menu" id="fixview">
                <div class="caixa-menu-selecionado caps ms-md-5 mx-4 mt-5">Contactos</div>
                <div class="sobre-mim t1 pb-3 ms-md-5 mx-4 mt-2">pode contactar-me através do e-mail ou telefone</div>
            </div>
        </div>
        <div class="row p-5 area-texto d-flex justify-content-center text-center gap-3">
            <div class="col-md-2 col-10">
                <p class="titulo-campo mb-1 novidade caps">
                    Telefone
                </p>
                <p class="campo-rodape p1">
                    <?= getContactos("telefone"); ?>
                </p>
            </div>
            <div class="col-md-4 col-10">
                <p class="titulo-campo novidade mb-1 caps">
                    Morada
                </p>
                <p class="campo-rodape p1 px-5">
                    <?= getContactos("morada"); ?>
                </p>
            </div>
            <div class="col-md-2 col-10">
                <p class="titulo-campo mb-1 novidade caps">
                    e-mail
                </p>
                <p class="campo-rodape p1">
                    <?= getContactos("email"); ?>
                </p>
            </div>
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center gap-5">
            <div class="col-6">
                <div class=" col-1 divisoria mx-auto"></div>
            </div>
            <div class="col-md-4 col-10 text-center">
                <p class="titulo-campo mb-1 novidade caps">
                    horário
                </p>
                <p class="campo-rodape p1">
                    <?= getContactos("horario"); ?>
                </p>
            </div>
        </div>
    </div>
</main>