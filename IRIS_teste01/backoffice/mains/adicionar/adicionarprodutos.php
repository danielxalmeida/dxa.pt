<main>
    <div class="container-md">
        <div class="row">
            <div class="col-12 p-0 text-uppercase fs-3">
                Adicionar Novos Brincos
            </div>
            <div class="col-12 my-2 divisoria"></div>
        </div>
        <form action="mains/adicionar/novoprodutos" class="row d-flex justify-content-between flex-column gap-2 p-0">

            <div class="col-12 d-flex justify-content-between flex-column gap-2 p-0">
                <div class="row text-uppercase">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label for="titulo">
                                    <span class="tt1">Nome:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="nome" id="nome" class="w-100" placeholder="Nome" required>
                            </div>
                            <div class="col-12">
                                <label for="modelo">
                                    <span class="tt1">modelo:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="modelo" id="modelo" class="w-100" placeholder="Modelo" required>
                            </div>
                            <div class="col-12">
                                <label for="stock">
                                    <span class="tt1">Stock:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="stock" id="stock" class="w-100" placeholder="Stock" required>
                            </div>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <label for="tamanho">
                                    <span class="tt1">tamanho:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="tamanho" id="tamanho" class="w-100" placeholder="Tamanho" required>
                            </div>
                            <div class="col-12">
                                <label for="cor1">
                                    <span class="tt1">cor Principal:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="cor1" id="cor1" class="w-100" placeholder="Cor Principal" required>
                            </div>
                            <div class="col-12">
                                <label for="cor2">
                                    <span class="tt1">Cor secundária:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="cor2" id="cor2" class="w-100" placeholder="Cor Secundária" required>
                            </div>

                        </div>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <label for="preco">
                                    <span class="tt1">Preço:</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="preco" id="preco" class="w-100" placeholder="Preço" required>
                            </div>
                            <div class="col-12">
                                <label for="linkwts">
                                    <span class="tt1">Link Whatshapp</span>
                                    <span> *</span>
                                </label>
                                <input type="text" name="linkwts" id="linkwts" class="w-100" placeholder="Link do catálogo Whatsapp" required>
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
                                    <input type="radio" name="activo" value="1" id="activo" required checked>
                                    <br>
                                    <input type="radio" name="activo" value="0" id="nactivo">
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
                    <label for="texto" class="text-uppercase m-2">Texto</label>
                    <span class="tooltip-texto">Descrição do brinco</span>
                    <textarea type="texto" name="texto" id="editor" class="w-100" placeholder="Texto"></textarea>
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="imagem_1" class="text-uppercase m-2">Imagem Principal</label>
                    <input type="text" name="imagem_1" id="imagem_1" class="w-100" placeholder="Imagem principal" required>
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="imagem_2" class="text-uppercase m-2">Imagem 2</label>
                    <input type="text" name="imagem_2" id="imagem_2" class="w-100" placeholder="imagem 2">
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="imagem_3" class="text-uppercase m-2">Imagem 3</label>
                    <input type="text" name="imagem_3" id="imagem_3" class="w-100" placeholder="imagem 3">
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="imagem_4" class="text-uppercase m-2">Imagem 4</label>
                    <input type="text" name="imagem_4" id="imagem_4" class="w-100" placeholder="imagem 4">
                </div>
                <div class="col-12 tooltip-hover">
                    <label for="imagem_5" class="text-uppercase m-2">Imagem 5</label>
                    <input type="text" name="imagem_5" id="imagem_5" class="w-100" placeholder="imagem 5">
                </div>
            </div>
            <div class="text-start">
                * Campos obrigatórios
            </div>
            <div class="col-12 mt-3 divisoria"></div>
            <div class="col-12 my-3 px-0">
                <button type="button" class="btn btn-secondary" onclick="voltAtras();">Cancelar</button>
                <button name="editar" value="-1" class="btn btn-success">Guardar</button>
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