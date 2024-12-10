<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Adicionar Nota de Imprensa
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>

        <form action="mains/adicionar/novairis" class="row mt-3">
            <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                <div class="row text-uppercase">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <label for="titulo">
                                    <span class="tt1">titulo:</span>
                                    <span> *</span>
                                </label>
                            </div>
                            <div class="col-12 mt-2">
                                <input type="text" name="titulo" id="titulo" class="w-100" placeholder="Titulo" required>
                            </div>
                        </div>
                        <div class="row text-uppercase">
                            <div class="col-12 tooltip-hover">
                                <label for="data">
                                    <span class="tt1">data:</span>
                                    <span> *</span>
                                    <span class="tooltip-texto">por extenso, ex: "Publicado a 30 de Novembro de 2023"</span>
                                </label>
                                <input type="text" name="data" id="data" class="w-100" placeholder="Data" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row h-100 pe-3 tooltip-hover">
                            <div class="col-12">
                                <label for="activo">
                                    <span class="tt1">Visibiliade:</span>
                                    <span class="tooltip-texto">Tornar esta notícia visível para todos os utilizadores?</span>
                                    <span> *</span>
                                </label>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center gap-5 border border-dark-subtle bg-white">
                                <span>
                                    <br>
                                    <input type="radio" name="ativo" value="1" id="activo" required checked="checked">
                                    <br>
                                    <input type="radio" name="ativo" value="0" id="nactivo">
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
                <div class="row">
                    <div class="col-12">
                        <label for="txt">Texto</label>
                        <textarea type="text" name="txt" id="txt" class="w-100" required>
                            </textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#txt'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                    <!-- <div class="col-12">
                        <label for="imagem">Imagem:</label>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center gap-1 py-2 tooltip-hover">
                        <span class="tooltip-texto">Imagem a ser mostrada antes do texto.</span>
                        <input type="text" name="imagem" id="imagem" class="w-100" placeholder="Link da imagem">
                        <a href="../filemanager/tinyfilemanager.php" target="_blank">
                            <button type="button" class="btn btn-light pasta">
                                <i class="bi bi-image"></i>
                            </button>
                        </a>
                    </div> -->
                </div>

            </div>
            <br>
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