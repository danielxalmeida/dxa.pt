    <main class="container-fluid d-flex justify-content-center">
        <!-- 
            Envios:
                infromações relativas à politica de envios. 
        -->
    <div class="row d-flex justify-content-center w-100">
        <div class="col-md-10 col-12 my-3 border">
            <div class="row">
                <div class="col-12">
                    <h1>
                        <?= getTituloEnvios();?>
                    </h1>
                </div>
                <br>
                <div class="col-12 text-end">
                    <h3>
                    <?= getDataEnvios();?>
                    </h3>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- UTILIZAR O EDITOR DE TEXTO PARA ADICIONAR SEJA O QUE FOR. 
                            SE BEM ME LEMBRO, HÁ ALGUNS ONDE SE ADICIONA LOGO A IMAGEM, QUE VAI FAZER PARTE DO TEXTO E, CONSEQUENTEMENTE, DO ESPAÇO.
                    -->

                    <?= getTextoEnvios();?>

                </div>
                <div class="ver-mais text-center mb-4">
                    <button class="btn btn-outline-danger border-3">
                        Ver mais...
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>