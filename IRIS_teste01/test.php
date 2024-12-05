$rota_form[1]


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
                <div class="row d-flex justify-content-center gap-4 text-center text-lg-start">
                    <div class="col-lg-5 col-12 d-flex justify-content-center">
                        <!-- carousel -->
                        <div id="carouselModelos" class="carousel slide ">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="<?=getProdutoRota($rota_form[1],'imagem_1');?>" class="d-block imagem-carousel-modelos" alt="...">
                                </div>

                                <?php if(!empty(getProdutoRota($rota_form[1],'imagem_2'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_form[1],'imagem_2');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota($rota_form[1],'imagem_3'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_form[1],'imagem_3');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota($rota_form[1],'imagem_4'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_form[1],'imagem_4');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota($rota_form[1],'imagem_5'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_form[1],'imagem_5');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModelos"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModelos"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <!-- descrição -->
                        <h3><?=getProdutoRota($rota_form[1],'nome');?></h3>
                        <?=getProdutoRota($rota_form[1],'texto')?>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal1">ENCOMENDAR</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards - SUGESTÕES - xxx -->
        <div class="row">
            <!-- <div class="col-12 p-0">
                <hr>
            </div> -->
            <div class="col-12 text-center fs-3 my-3">
                Sugestões lindas ^^
                <!-- 
                    Aqui fica um random de opções. 
                    O produto seleccionado é único e vem da pesquisa anterior.
                -->
            </div>
        </div>
        <div class="row d-flex gap-4 align-content-center justify-content-center">
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>

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
                        <a href="<?=getProdutoRota($rota_form[1],'linkwts')?>" target="_blank"><button type="button"
                                class="btn btn-primary">Encomendar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>


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
                <div class="row d-flex justify-content-center gap-4 text-center text-lg-start">
                    <div class="col-lg-5 col-12 d-flex justify-content-center">
                        <!-- carousel -->
                        <div id="carouselModelos" class="carousel slide ">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="<?=getProdutoRota($rota_final[2],'imagem_1');?>" class="d-block imagem-carousel-modelos" alt="...">
                                </div>

                                <?php if(!empty(getProdutoRota($rota_final[2],'imagem_2'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_final[2],'imagem_2');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota($rota_final[2],'imagem_3'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_final[2],'imagem_3');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota$rota_final[2],'imagem_4'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_final[2],'imagem_4');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                                <?php if(!empty(getProdutoRota($rota_final[2],'imagem_5'))):?>
                                    <div class="carousel-item">
                                        <img src="<?=getProdutoRota($rota_final[2],'imagem_5');?>" class="d-block imagem-carousel-modelos" alt="...">
                                    </div>
                                <?php endif;?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselModelos"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselModelos"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <!-- descrição -->
                        <h3><?=getProdutoRota($rota_final[2],'nome');?></h3>
                        <?=getProdutoRota($rota_final[2],'texto')?>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal1">ENCOMENDAR</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards - SUGESTÕES - xxx -->
        <div class="row">
            <!-- <div class="col-12 p-0">
                <hr>
            </div> -->
            <div class="col-12 text-center fs-3 my-3">
                Sugestões lindas ^^
                <!-- 
                    Aqui fica um random de opções. 
                    O produto seleccionado é único e vem da pesquisa anterior.
                -->
            </div>
        </div>
        <div class="row d-flex gap-4 align-content-center justify-content-center">
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>
            <div class="col-lg-2 col-sm-5 col-12  text-center imagem-card-modelo">
                <a href="">
                    <img src="imagens/br_2c_1.jpg" alt="" class="w-100 z-n1">
                    <!-- <h3 class="z-3">DESCRição</h3> -->
                </a>
            </div>

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
                        <a href="<?=getProdutoRota($rota_final[2],'linkwts')?>" target="_blank"><button type="button"
                                class="btn btn-primary">Encomendar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>