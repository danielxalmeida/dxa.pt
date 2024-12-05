<main class="container-lg my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 p-2 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>Imagem Desktop</th>
                    <th class="d-none d-xl-table-cell">Imagem Mobile</th>
                    <th>titulo</th>
                    <th>Texto</th>
                    <th>Observação</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach (getTodosCarousel() as $l) : ?>
                        <tr>
                            <td><?= $l["id"]; ?></td>
                            <td class="p-3"><img src="<?= $l["imagem_desktop"]; ?>" class="img-fluid" alt="imagem_desktop"></td>
                            <td class="d-none d-xl-table-cell"><img src="<?= $l["imagem_mobile"]; ?>" class="img-fluid w-75" alt="imagem_mobile"></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= substr($l["subtitulo"], 0, 200) . "..."; ?></td>
                            <td><?= $l["observacao"]; ?></td>
                            <td><?= ($l["activo"] == 1 ? "Sim" : "Não"); ?></td>
                            <td width=155px>
                                <form action="carousel_edit.php">
                                    <button name="editar" value="<?= $l["id"]; ?>" class="btn btn-warning btn-sm iguais">editar</button>
                                </form>
                                <br><br>
                                <form action="carousel_apaga.php">
                                    <button name="apagar" value="<?= $l["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-12 my-4">
            <form action="carousel_adiciona.php">
                <button name="editar" value="-1" class="btn btn-success btn-sm">Novo Slide</button>
            </form>
        </div>
    </div>
</main>