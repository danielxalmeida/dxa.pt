<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?> - <?= getTituloCarousel($id); ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarcarousel.php" class="row mt-3">

            <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                <div class="row text-uppercase">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12 tooltip-hover">
                                <label for="titulo">
                                    <span class="tt1">titulo:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="titulo" id="titulo" class="w-100" value="<?= getTituloCarousel($id); ?>" required>
                            </div>
                            <div class="col-12 tooltip-hover">
                                <label for="destaque">
                                    <span class="tt1">destaque:</span>
                                    <span class="tooltip-texto">Campo de destaque, antes do título</span>
                                </label>
                                <input type="text" name="destaque" id="destaque" class="w-100" value="<?= getObservacaoCarousel($id); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row h-100 pe-3 tooltip-hover">
                            <div class="col-12">
                                <label for="activo">
                                    <span class="tt1">Visibiliade:</span>
                                    <span class="tooltip-texto">Tornar este registo visível?</span>
                                    <span> *</span>
                                </label>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center gap-5 border border-dark-subtle bg-white">
                                <span>
                                    <br>
                                    <input type="radio" name="ativo" value="1" id="activo" required <?= (getAtivoCarousel($id) == 1 ? 'checked="checked"' : ""); ?>>
                                    <br>
                                    <input type="radio" name="ativo" value="0" id="nactivo" <?= (getAtivoCarousel($id) == 0 ? 'checked="checked"' : ""); ?>>
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
                <div class="row text-uppercase">
                    <div class="col-12 tooltip-hover">
                        <label for="smai">Saber Mais</label>
                        <span> *</span>
                        <span class="tooltip-texto">Link a que este carrossel se destina</span>
                        <input type="text" name="smai" id="smai" class="w-100 my-2" value="<?= getLinkCarousel($id); ?>" required>
                    </div>
                    <div class="col-12 my-2 tooltip-hover">
                        <label for="txt" class=" text-uppercase">texto</label>
                        <span class="tooltip-texto">Descrição pouco detalhada do conteúdo</span>
                        <span> *</span>
                        <textarea type="text" name="txt" id="editor" class="w-100" value="?"><?= getTextoCarousel($id); ?></textarea>
                    </div>
                </div>

                <div class="row text-uppercase tooltip-hover">
                    <div class="col-12">
                        <label for="imgdesk">Imagem Desktop</label>
                        <span> *</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="imgdesk" id="imgdesk" class="w-100" value="<?= getImagemDesktopCarousel($id); ?>" required>
                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button" class="btn btn-light pasta">
                                <i class="bi bi-image"></i>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="row text-uppercase tooltip-hover">
                    <div class="col-12">
                        <label for="imgmob">Imagem Mobile</label>
                        <span> *</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="imgmob" id="imgmob" class="w-100" value="<?= getImagemMobileCarousel($id); ?>" required>

                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button" class="btn btn-light pasta">
                                <i class="bi bi-image"></i>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
            <br>
            <div class="text-start">
                * Campos obrigatórios
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Voltar</button>
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
</script>