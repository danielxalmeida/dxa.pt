<main class="container-fluid">
    <!-- 
        Container do tipo col 10, centrado
        Barra lateral (col-2?) com diversos filtros (de acordo com o tipo de produto.)
        resto do corpo com os produtos. 
        
        em baixo, a paginação.
    -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="container d-flex">
                <div class="row mt-2 d-flex w-100">
                    <div class="col-md-3 col-12">
                        <div class="row my-2">
                            <!-- 
                                JavaScript aqui, para fazer os filtros automaticos. 
                                Para já, form e actualizar.
                            -->
                            <form action="" class="d-flex flex-column align-items-center">
                                <div class="col-4 col-md-12">
                                    <p class="fs-4">CATEGORIA 1:</p>
                                    <p>
                                        <input type="radio" id="pequeno" name="cat1" value="pequeno" <?= $tamanho == "pequeno" ? 'checked class="active"' : "" ?>>
                                        <label for="pequeno" class="text-capitalize">
                                            pequeno
                                        </label>
                                    </p>
                                    <p> <input type="radio" id="medio" name="cat1" value="medio" <?= $tamanho == "medio" ? 'checked class="active"' : "" ?>>
                                        <label for="medio" class="text-capitalize">
                                            medio
                                        </label>
                                    </p>
                                    <p>
                                        <input type="radio" id="grande" name="cat1" value="grande" <?= $tamanho == "grande" ? 'checked class="active"' : "" ?>>
                                        <label for="grande" class="text-capitalize">
                                            grande
                                        </label>
                                    </p>
                                </div>
                                <div class="col-4 col-md-12">
                                    <p class="fs-4">CATEGORIA 2:</p>
                                    <p>
                                        <input  type="radio" id="brilhante" name="cat2" value="Pandora" <?= $modelo == "Pandora" ? 'checked class="active"' : "" ?>>
                                        <label for="brilhante" class="text-capitalize">Pandora</label>
                                    </p>
                                    <p>
                                        <input  type="radio" id="mate" name="cat2" value="arodnaP" <?= $modelo == "arodnaP" ? 'checked class="active"' : "" ?>>
                                        <label for="mate" class="text-capitalize">arodnaP</label>
                                    </p>
                                </div>
                                <a href="modelos"><button type="button">Limpar</button></a>

                                <input type="submit" value="Aplicar" class="col-4 col-md-6 align-self-md-start">

                            </form>
                        </div>
                    </div>
                    <div class="col-md-9 col-12">
                        <div class="row lista-produtos-cards d-flex flex-row">
                            <?php if (empty($pesquisa)) : ?>
                                <?php foreach (getTodosProdutos() as $i => $d) : ?>
                                    <?php if ($d["stock"] > 0) : ?>
                                        <div class="col-lg-3 col-sm-6 col-12 card-produtos text-center px-1">
                                            <a href="produtos?<?= $d["id"] ?>" class="text-decoration-none text-black">
                                                <img src="<?= $d["imagem_1"] ?>" alt="" class="brincos-modelos-view">
                                                <h3 class="text-center"><?= $d["nome"] ?></h3>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?php foreach ($pesquisa as $i => $d) : ?>
                                    <?php if ($d["stock"] > 0) : ?>
                                        <div class="col-lg-3 col-sm-6 col-12 card-produtos text-center">
                                            <a href="produtos?<?= $d["id"] ?>" class="text-decoration-none text-black">
                                                <img src="<?= $d["imagem_1"] ?>" alt="" class="brincos-modelos-view">
                                                <h3 class="text-center"><?= $d["nome"] ?></h3>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>