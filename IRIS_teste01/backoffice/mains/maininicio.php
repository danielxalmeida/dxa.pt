<main class="container my-5">
    <div class="row w-100 p-5 m-2 bg-body-tertiary bg-opacity-75 border border-1 border-light rounded-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
            <h3>Bem-vindo <?= $utilizador["nome"]; ?></h3>
            <h3>O seu último acesso foi em (<?= $utilizador["ultimo"]; ?>).</h3>
        </div>
    </div>
</main>