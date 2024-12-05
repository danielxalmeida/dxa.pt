<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarcontactos.php" class="row">

            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="telefone" id="telefone" class="w-100" value="<?= getContactos("telefone"); ?>" required>
                    </div>
                </div>

                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="email">email</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="email" id="email" class="w-100" value="<?= getContactos("email"); ?>" required>
                    </div>
                </div>
                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="morada">morada</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="morada" id="morada" class="w-100" value="<?= getContactos("morada"); ?>" required>
                    </div>
                </div>
                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="horario">horario</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="horario" id="horario" class="w-100" value="<?= getContactos("horario"); ?>" required>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Voltar</button>
                <button name="editar" value="" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</main>