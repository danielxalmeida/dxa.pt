<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Editar <?= $paginamain; ?>
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/actualizar/atualizarhome.php" class="row mt-3">

            <div class="col-12 d-flex justify-content-between flex-column gap-3 p-0">
                <div class="row text-uppercase tooltip-hover">
                    <div class="col-12">
                        <label for="imagem">Imagem da pagina home</label>
                        <span> *</span>
                        <span class="tooltip-texto">Imagem a apresentar dentro da caixa "Bem-Vindo"</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2">
                        <input type="text" name="imagem" id="imagem" class="w-100" value="<?= getImagemHome(); ?>" required>
                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button" class="btn btn-light pasta">
                                <i class="bi bi-image"></i>
                            </button>
                        </a>
                    </div>
                </div>

                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="txt_bem">Texto "Bem-Vindo":</label>
                        <span> *</span>
                        <span class="tooltip-texto">Apenas serão apresentados 900 caracteres.</span>
                    </div>
                    <div class="col-12 py-2">
                        <textarea type="text" name="txt_bem" id="txt_bem" class="w-100" rows="7" required><?= getTextoAutorHome(); ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt_bem'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                </div>

                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="link">Botão SABER MAIS</label>
                        <span> *</span>
                        <span class="tooltip-texto">Link de destino para o Botão</span>
                    </div>
                    <div class="col-12 py-2">
                        <input type="text" name="link" id="link" class="w-100" value="<?= getLinkHome(); ?>" required>
                    </div>
                </div>

                <div class="row tooltip-hover">
                    <div class="col-12 text-uppercase">
                        <label for="txt_livros">Texto do campo "Últimos Livros":</label>
                        <span class="tooltip-texto">Texto a apresentar após o título "Últimos Livros", sem limites.</span>
                    </div>
                    <div class="col-12 py-2">
                        <textarea type="text" name="txt_livros" id="txt_livros" class="w-100" rows="7"><?= getTextoUltimosLivrosHome(); ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt_livros'))
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