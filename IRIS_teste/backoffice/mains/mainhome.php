<main class="container my-5">

    <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-2 d-flex justify-content-center">

    <div class="col-12 my-4 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Modelo</th>
                    <th>activo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach (getTodosDestaques() as $d) : ?>
                        <tr>
                            <td><?= $d["id"]; ?></td>
                            <?php if (!empty($d["id_produto"])) : ?>
                                <td><img src="<?= getProdutoImagem($d["id_produto"]); ?>" alt="capa"></td>
                                <td><?= getProdutoRota(intval($d["id_produto"]),"modelo"); ?></td>
                                <td><?= $d["activo"]; ?></td>
                            <?php else : ?>
                                <td></td>
                                <td></td>
                                <td></td>
                            <?php endif; ?>
                            <td width=155px>
                                <form action="home_edit">
                                    <button name="editar" value="<?= $d["id"]; ?>" class="btn btn-warning btn-sm">editar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>