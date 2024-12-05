<main>
    <div class="container-fluid main">
        <div class="row mb-3 justify-content-end">
            <div class="col-md-11 col-12 ms-5 px-3 caixa-menu shadow-menu" id="fixview">
                <div class="caixa-menu-selecionado caps ms-md-5 mx-4 mt-5">Imprensa</div>
                <div class="sobre-mim t1 ms-md-5 mx-4 mt-2  pb-3">últimas notícias</div>
            </div>
        </div>
        <?php foreach ($imprensa as $i => $imp) : ?>
            <div class="row p-3 p-md-5 imprensa d-flex flex-column align-items-center">
                <div class="col-md-10 col-12 text-center">
                    <div class="text-start t1"><?= $imp["titulo"]; ?></div>
                    <div class="pt-0 divisoria my-2 m-auto"></div>
                    <div class="data-publicacao text-end"><?= $imp["data"]; ?></div>
                    <div class="col-12 my-5"><img src="<?= $imp["imagem"]; ?>" alt="Conteudo Imprensa - <?= $i + 1; ?>" class="w-100"></div>
                    <div class="col-12 p1 text-start my-4 py-3">
                        <?= $imp["texto"]; ?>
                    </div>
                </div>
                <?= ($i % 2 == 0 && $ignora != $mmprod-1 ? '<div class="col-12 separa-noticias"></div>' : ""); ?>
            </div>

        <?php endforeach; ?>

        <div class="">
            <form action="" class="paginacao d-flex justify-content-center align-items-center my-md-5 p-md-5">

                <!-- para menos -->
                <?php if ($pagina - $total_botoes > 1) : ?>
                    <button class="pagina" name="pagina" value="<?= $pagina - 1; ?>">
                        <div class="seta seta-esquerda me-md-5 me-3">
                        </div>
                    </button>
                    <div class="mx-2">
                        <button class="pagina" name="pagina" value="1">
                            ...
                        </button>
                    </div>
                    <?php for ($i = $pagina + 1 - $total_botoes; $i < $pagina; $i++) : ?>
                        <div class="pagina mx-2">
                            <button class="pagina" name="pagina" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </div>
                    <?php endfor; ?>
                <?php else : ?>
                    <?php if ($pagina !=1) : ?>
                        <button class="pagina" name="pagina" value="<?= $pagina - 1; ?>">
                            <div class="seta seta-esquerda me-md-5 me-3">
                            </div>
                        </button>
                    <?php endif; ?>

                    <?php for ($i = 1; $i < $pagina; $i++) : ?>
                        <div class="pagina mx-2">
                            <button class="pagina" name="pagina" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </div>
                    <?php endfor; ?>

                <?php endif; ?>

                <!-- para actual -->
                <div class="mx-2"><button class="pagina active" name="pagina" value="<?= $pagina; ?>"><?= $pagina; ?></button></div>

                <!-- para mais -->
                <?php if ($pagina >= $total_paginas - $total_botoes) : ?>
                    <?php for ($i = $pagina + 1; $i <= $total_paginas; $i++) : ?>
                        <div class="pagina mx-2">
                            <button class="pagina" name="pagina" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </div>
                    <?php endfor; ?>
                    <?php if ($pagina!=$total_paginas) : ?>
                    <button class="pagina" name="pagina" value="<?= $pagina + 1; ?>">
                        <div class="seta seta-direita ms-md-5 ms-3">
                        </div>
                    </button>
                    <?php endif; ?>
                <?php else : ?>
                    <?php for ($i = $pagina + 1; $i < $pagina + 2; $i++) : ?>
                        <div class="pagina mx-2">
                            <button class="pagina" name="pagina" value="<?= $i; ?>">
                                <?= $i; ?>
                            </button>
                        </div>
                    <?php endfor; ?>
                    <div class="mx-2">
                        <button class="pagina" name="pagina" value="<?= $total_paginas; ?>">
                            ...
                        </button>
                    </div>
                    <button class="pagina" name="pagina" value="<?= $pagina + 1; ?>">
                        <div class="seta seta-direita ms-md-5 ms-3">
                        </div>
                    </button>

                <?php endif; ?>
            </form>
        </div>
    </div>
</main>