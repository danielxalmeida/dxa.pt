<main class="container my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Texto</th>
                    <th>Modelo</th>
                    <th>preço</th>
                    <th>Stock</th>
                    <th>ações</th>
                </thead>
                <tbody class="align-items-center justify-content-center">
                    <?php foreach (getTodosProdutos() as $l) : ?>
                        <tr>
                            <td><?= $l["id"]; ?></td>
                            <td class="p-3"><img src="<?= $l["imagem_1"]; ?>" alt="imagem_1"></td>
                            <td><?= $l["nome"]; ?></td>
                            <td><?= substr($l["texto"], 0, 200) . "..."; ?></td>
                            <td><?=$l["modelo"];?></td>
                            <td><?= $l["preco"]; ?></td>
                            <td><?= $l["stock"]; ?></td>

                            <td width=155px>
                                <form action="produtos_edit">
                                    <button name="editar" value="<?= $l["id"]; ?>" class="btn btn-warning btn-sm iguais">editar</button>
                                </form>
                                <br><br>
                                <form action="produtos_apaga">
                                    <button name="apagar" value="<?= $l["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-12 my-4">
            <form action="produtos_adiciona">
                <button name="editar" value="-1" class="btn btn-success btn-sm">Novo Produto</button>
            </form>
        </div>
    </div>
</main>