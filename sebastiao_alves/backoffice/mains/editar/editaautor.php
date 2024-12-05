<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarautor.php" class="row mt-3">

            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row text-uppercase tooltip-hover">
                    <div class="col-12">
                        <label for="imagem">Imagem</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2 tooltip-hover">
                        <input type="text" name="imagem" id="imagem" class="w-100" value="<?= getImagemAutor(); ?>" required>
                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button" class="btn btn-light pasta">
                                <i class="bi bi-image"></i>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="txt">"Sobre o Autor":</label>
                        <span class="tooltip-texto">Texto descritivo sobre o Autor, sem limite de caracteres.</span>
                    </div>
                    <div class="col-12 py-2 tooltip-hover">
                        <textarea type="text" name="txt" id="txt" class="w-100" value="" required><?= getTextoAutor(); ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                </div>
            </div>
            <div class="text-start">
                * Campos obrigatórios
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Voltar</button>
                <button name="editar" value="" class="btn btn-success">Guardar</button>
            </div>

        </form>

    </div>
</main>