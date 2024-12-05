<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar - <?= getTituloLivro($id); ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarlivros.php" class="row d-flex justify-content-between flex-column gap-2 p-0">

            <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                <div class="row text-uppercase">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <label for="titulo">
                                    <span class="tt1">titulo:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="titulo" id="titulo" class="w-100" value="<?= getTituloLivro($id); ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="imagem">Capa:</label>
                                <span> *</span>
                            </div>
                            <div class="col-12 d-flex justify-content-between align-items-center gap-1 tooltip-hover">
                                <input type="text" name="imagem" id="imagem" class="w-100" value="<?= getImagemLivro($id); ?>" required>
                                <span class="tooltip-texto">Link para a capa do livro</span>
                                <a href="../filemanager/tinyfilemanager.php" target="_blank">
                                    <button type="button" class="btn btn-light pasta">
                                        <i class="bi bi-image"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row h-100 pe-3 tooltip-hover">
                            <div class="col-12">
                                <label for="activo">
                                    <span class="tt1">Visibiliade:</span>
                                    <span class="tooltip-texto">Tornar este livro visível?</span>
                                    <span> *</span>
                                </label>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center gap-5 border border-dark-subtle bg-white">
                                <span>
                                    <br>
                                    <input type="radio" name="ativo" value="1" id="activo" required <?= (getAtivoLivro($id) == 1 ? 'checked="checked"' : ""); ?>>
                                    <br>
                                    <input type="radio" name="ativo" value="0" id="nactivo" <?= (getAtivoLivro($id) == 0 ? 'checked="checked"' : ""); ?>>
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
            <div class="col-12 p-0">
                <div class="col-12 tooltip-hover">
                    <label for="txt" class="text-uppercase m-2">Texto</label>
                    <span class="tooltip-texto">Descrição do Livro</span>
                    <textarea type="text" name="txt" id="editor" class="w-100" placeholder="Texto"><?= getTextoLivro($id); ?></textarea>
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="detalhe" class="text-uppercase m-2">Detalhes</label>
                    <span class="tooltip-texto">Formatos, Pontos de venda, Editoras...</span>
                    <textarea type="text" name="detalhe" id="detalhe" class="w-100" placeholder="Detalhes"><?= getDetalhesLivro($id); ?></textarea>
                </div>
            </div>
            <div class="text-start">
                * Campos obrigatórios
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Cancelar</button>
                <button name="editar" value="<?= $id; ?>" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</main>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#detalhe'))
        .catch(error => {
            console.error(error);
        });
</script>