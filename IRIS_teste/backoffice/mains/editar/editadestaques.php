<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizardestaques.php" class="row">
            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row text-uppercase">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <label for="livro">
                                    <span class="tt1">Livro:</span>
                                    <span>*</span>
                                </label>
                                <select name="livro" id="livro" class="p-2 w-100" required>
                                    <?php foreach (getTodosLivros() as $d) : ?>
                                        <option value="<?= $d["id"]; ?>" <?= ($d["id"] == getLivroDestaque($editar) ? "selected" : ""); ?>><?= getTituloLivro($d["id"]); ?></option>
                                    <?php endforeach; ?>
                                    <option value="">(Vazio)</option>
                                </select>
                            </div>
                            <div class="col-12 tooltip-hover">
                                <label for="informacao">
                                    <span class="tt1">Observação:</span>
                                </label>
                                <span class="tooltip-texto">Destaque o factor que o leva a colocar este card: "Em Promoção", "Pré-Venda"...</span>
                                <input type="text" name="info" class="w-100" placeholder="Destacar" value="<?= getObservacaoDestaque($editar); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row h-100 pe-3 py-0 tooltip-hover">
                            <div class="col-12">
                                <label for="activo">
                                    <span class="tt1">Visibiliade:</span>
                                    <span class="tooltip-texto">Destacar este card?</span>
                                    <span> *</span>
                                </label>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center gap-5 border border-dark-subtle bg-white">
                                <span>
                                    <br>
                                    <input type="radio" name="ativo" value="1" id="activo" required <?= (getAtivoDestaque($id) == 1 ? 'checked="checked"' : ""); ?>>
                                    <br>
                                    <input type="radio" name="ativo" value="0" id="nactivo" <?= (getAtivoDestaque($id) == 0 ? 'checked="checked"' : ""); ?>>
                                    <br><br>
                                </span>
                                <span>
                                    <br>
                                    <label for="activo">Mostrar</label>
                                    <br>
                                    <label for="nactivo">Não Mostrar</label>
                                    <br><br>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-start">
                * Campos obrigatórios
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Voltar</button>
                <button name="editar" value="<?= $editar; ?>" class="btn btn-success">Guardar</button>
            </div>

        </form>

    </div>
</main>