<main class="container-fluid">
    <!-- 
            A IRIS e suas Noticias:
                A história fixa na primeira posição.
                Seguido de uma especie de Blog, onde podemos mostrar quer o desenvolvimento dos modelos, as inspirações, parte do proesso.. 
                Partilhar experiências.
        -->
    <!-- <h1>A IRIS</h1> -->
    <div class="row d-flex justify-content-center">

        <?php foreach(getTodaIris() as $iris): ?>
        <div class="col-md-10 col-12 my-3 border">
            <div class="row">
                <div class="col-12">
                    <h1>
                        <?= getTituloIris($iris["id"]);?>
                    </h1>
                </div>
                <br>
                <div class="col-12 text-end">
                    <h3>
                    <?= getDataIris($iris["id"]);?>
                    </h3>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- UTILIZAR O EDITOR DE TEXTO PARA ADICIONAR SEJA O QUE FOR. 
                            SE BEM ME LEMBRO, HÁ ALGUNS ONDE SE ADICIONA LOGO A IMAGEM, QUE VAI FAZER PARTE DO TEXTO E, CONSEQUENTEMENTE, DO ESPAÇO.
                    -->
                    <!-- <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi error id ullam consectetur nobis beatae cumque perspiciatis deleniti magni ex officia autem magnam enim iusto placeat similique maxime harum non soluta eos, obcaecati sequi! Tempore et ab ducimus tempora excepturi architecto illo nesciunt voluptatum! Eveniet, officia cum at architecto voluptatibus perferendis iure odio adipisci minima aliquid voluptas a, deserunt nobis tempore laboriosam excepturi sunt temporibus quam odit quod. Nulla repellat alias id sunt amet, earum, quas recusandae officia iusto ad et architecto! Aspernatur accusamus odit itaque dolores consectetur incidunt magnam, corporis voluptatum. Pariatur a minus voluptate, inventore eligendi aliquid.
                    </p>
                    <p class="text-center">
                        <img src="www.danielxalmeida.pt/iris_teste/imagens/iris_fundo2.jpg" alt="" class="text-center">
                    </p> -->
                    <?= getTextoIris($iris["id"]);?>

                </div>
                <div class="ver-mais text-center mb-4">
                    <button class="btn btn-outline-danger border-3">
                        Ver mais...
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>