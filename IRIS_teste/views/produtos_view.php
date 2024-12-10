    <main class="container-fluid">
        <!-- 
            Imagens em carousel, com a referência em cada imagem.
            Titulo
            Descrição
            Possivel composição:
                -Detalhe de alterações possíveis;
            Preços
            Referência
            Cores sugeridas:
                Varias imagens.            
            Botão "encomendar" com ligação Whatsapp ou Instangram??

         -->

        <!-- <div class="row">
            <div class="col-12 text-center titulo-modelo text-uppercase fs-1">
                TITULO DO MODELO
            </div>
        </div> -->
        <div class="row mt-5">
            <!-- Carousel -->
            <div class="col-12">
                <div class="row d-flex justify-content-center gap-4 text-center">
                    <div class="col-lg-5 col-12 d-flex justify-content-center">
                        <!-- carousel -->
                        <div id="carouselProdutos" class="carousel slide">
                            <div class="carousel-indicators d-flex gap-4">

                                <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                    <img src="<?= getProdutoRota($rota_final[1], 'imagem_1'); ?>" class="d-block img-indicator" alt="...">
                                </button>

                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_2'))) : ?>
                                    <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_2'); ?>" class="d-block img-indicator" alt="...">
                                    </button>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_3'))) : ?>
                                    <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_3'); ?>" class="d-block img-indicator" alt="...">
                                    </button>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_4'))) : ?>
                                    <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="3" class="active" aria-current="true" aria-label="Slide 4">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_4'); ?>" class="d-block img-indicator" alt="...">
                                    </button>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_5'))) : ?>
                                    <button type="button" data-bs-target="#carouselProdutos" data-bs-slide-to="4" class="active" aria-current="true" aria-label="Slide 5">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_5'); ?>" class="d-block img-indicator" alt="...">
                                    </button>
                                <?php endif; ?>

                            </div>
                            <div class="carousel-inner col-12">
                                <div class="carousel-item active">
                                    <img src="<?= getProdutoRota($rota_final[1], 'imagem_1'); ?>" class="d-block imagem-carousel-modelos" alt="...">
                                </div>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_2'))) : ?>
                                    <div class="carousel-item">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_2'); ?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_3'))) : ?>
                                    <div class="carousel-item">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_3'); ?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_4'))) : ?>
                                    <div class="carousel-item">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_4'); ?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty(getProdutoRota($rota_final[1], 'imagem_5'))) : ?>
                                    <div class="carousel-item">
                                        <img src="<?= getProdutoRota($rota_final[1], 'imagem_5'); ?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdutos" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProdutos" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 mt-5 mt-lg-1 text-lg-start">
                        <!-- descrição -->
                        <h3><?= getProdutoRota($rota_final[1], 'nome'); ?></h3>
                        <?= getProdutoRota($rota_final[1], 'texto') ?>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal1">ENCOMENDAR</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards - SUGESTÕES - xxx -->
        <div class="row mt-5">
            <!-- <div class="col-12 p-0">
                <hr>
            </div> -->
            <div class="col-12 text-center fs-3 my-3">
                Sugestões lindas ^^
                <!-- 
                    Aqui fica um random de opções. 
                    O produto seleccionado é único e vem da pesquisa anterior.

                    Passou a ser: Outros brincos do mesmo modelo (Assim apresenta outras cores)
                    Maximo de 4 resultados.
                -->
            </div>
        </div>
        <div class="row d-flex gap-4 align-content-center justify-content-center">
            <?php foreach ($modelos as $m) : ?>
                <?php if ($m["imagem_1"] != getProdutoRota($rota_final[1], 'imagem_1')) : ?>
                    <div class="col-lg-2 col-sm-3 col-10 text-center">
                        <a href="">
                            <img src="<?= $m["imagem_1"]; ?>" alt="" class="w-100 imagem-sugestao">
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Encomenda através do Whatsapp, ou pelo link abaixo :)
                        <br>
                        Por favor, indica-nos a cor na tua mensagem.

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="<?= getProdutoRota($rota_final[1], 'linkwts') ?>" target="_blank"><button type="button" class="btn btn-primary">Encomendar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>