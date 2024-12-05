<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarredes.php" class="row">

            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="instagram">instagram</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="instagram" id="instagram" class="w-100" value="<?= getredes("instagram"); ?>" required>
                    </div>
                </div>

                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="facebook">facebook</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="facebook" id="facebook" class="w-100" value="<?= getredes("facebook"); ?>" required>
                    </div>
                </div>
                <div class="row text-uppercase">
                    <div class="col-12">
                        <label for="linkedin">linkedin</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="linkedin" id="linkedin" class="w-100" value="<?= getredes("linkedin"); ?>" required>
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