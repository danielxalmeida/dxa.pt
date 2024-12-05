  <main class="container-lg">
    <!-- Imagem introdução -->
    <!-- <div class="row mt-3">
      <div class="col-12 imagem-capa-home d-flex flex-column align-content-around ">
        <h4 class="m-auto">
          <p>Brincos lindos ^^</p>
          <p>Queres ver mais?</p>
        </h4>
        <button type="button" class="btn btn-sm btn-info mx-auto">Sim!!</button>
      </div>
    </div> -->
    <!-- "Últimos modelos" -->
    <div class="row d-flex flex-column align-items-center my-4">
      <div class="col-12">
        <h1 class="text-center">
          Últimas Inspirações
        </h1>
      </div>
      <div class="col-2">
        <hr>
      </div>
    </div>
    <div class="row p-2 cards-home<?= getGrid() == 1 ? '-grid' : '2' ?>">
      
      <?php foreach (getTodosDestaques() as $i => $d) : ?>
        <?php if ($d["activo"] == 1) : ?>
          <div class="<?= getGrid() == 1 ? 'col-lg-12':'col-lg-4' ?> col-sm-5 col-12 imagem-card-home <?= getGrid() == 1 ? 'home' . $d["id"] : '' ?> position-relative">
              <a href="modelos?cat2=<?= getProdutoRota($d["id_produto"],"modelo") ?>" class="d-flex justify-content-center">
                <img src="<?=getProdutoRota($d["id_produto"],"imagem_1")?>" alt="" class="<?= getGrid() == 1 ? 'img_grelha':'img_linha' ?>">
              </a>
              <!-- <h3 class="texto-centrado-card<?= getGrid() == 1 ? '-grid' : '-flex' ?>">
                <?= getProdutoRota($d["id_produto"],"modelo") ?>
              </h3> -->
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      <!-- 
      <div class="col-lg-12 col-sm-5 col-12 imagem-card-home home2 position-relative">
        <a href="modelos">
          <img src="imagens/br_2c_3.jpg" alt="" class="w-100">
        </a>
        <h3 class="texto-centrado-card">
          20000
        </h3>

      </div>
      <div class="col-lg-12 col-sm-5 col-12 imagem-card-home home3 position-relative">
        <a href="modelos">
          <img src="imagens/br_2c_2.jpg" alt="" class="w-100">
          <h3 class="texto-centrado-card text-decoration-none text-black">
            300000
          </h3>
        </a>
      </div>

      <div class="col-lg-12 col-sm-5 col-12 imagem-card-home home4 position-relative">
        <a href="modelos">
          <img src="imagens/br_2c_4.jpg" alt="" class="w-100">
          <h3 class="texto-centrado-card text-decoration-none text-black">
            4
          </h3>
        </a>
      </div>
      <div class="col-lg-12 col-sm-5 col-12 imagem-card-home home5 position-relative">
        <a href="modelos">
          <img src="imagens/br_azul_1.jpg" alt="" class="w-100">
          <h3 class="texto-centrado-card text-decoration-none text-black">
            5
          </h3>
        </a>
      </div>
      <div class="col-lg-12 col-sm-5 col-12 imagem-card-home home6 position-relative">
        <a href="modelos">
          <img src="imagens/br_2c_5.jpg" alt="" class="w-100">
        </a>
        <h3 class="texto-centrado-card text-decoration-none text-black">
          6
        </h3>
      </div> -->
      <!-- <div class="col-lg-3 col-sm-5 col-12 imagem-card-home position-relative">
        <a href="modelos.html">
          <img src="imagens/br_azul_2.jpg" alt="" class="w-100">
          <h3 class="texto-centrado-card text-decoration-none text-black">
            Duas Cores juntas :)
          </h3>
        </a>
      </div>
      <div class="col-lg-3 col-sm-5 col-12 imagem-card-home position-relative">
        <a href="modelos.html">
          <img src="imagens/br_azul_3.jpg" alt="" class="w-100">
          <h3 class="texto-centrado-card text-decoration-none text-black">
            Duas Cores juntas :)
          </h3>
        </a>
      </div> 
    -->
    </div>
  </main>