<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarenvios" class="row mt-3">

            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="txt">"Titulo e Data de Encomendas e Envios":</label>
                    </div>
                    <div class="col-12 py-2">
                        <input type="text" name="titulo" value="<?= getTituloEnvios()?>" class="w-100">
                        <input type="text" name="data" value="<?= getDataEnvios()?>" class="w-100">

                    </div>
                </div>

                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="txt">"Descrição de Encomendas e Envios":</label>
                        <span class="tooltip-texto"><?= getTooltipEnvios()?></span>
                    </div>
                    <div class="col-12 py-2 tooltip-hover">
                        <textarea type="text" name="txt" id="txt" class="w-100" value="" required><?= getTextoEnvios(); ?></textarea>
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