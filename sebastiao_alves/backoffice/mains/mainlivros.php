<main class="container my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Detalhes</th>
                    <th>Ativo</th>
                    <th>ações</th>
                </thead>
                <tbody class="align-items-center justify-content-center">
                    <?php foreach (getTodosLivros() as $l) : ?>
                        <tr>
                            <td><?= $l["id"]; ?></td>
                            <td class="p-3"><img src="<?= $l["imagem"]; ?>" alt="imagem_desktop"></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= substr($l["texto"], 0, 200) . "..."; ?></td>
                            <td><?= substr($l["detalhes"], 0, 200) . "..."; ?></td>
                            <td><?= $l["activo"] == 1 ? "Sim" : "Não"; ?></td>

                            <td width=155px>
                                <form action="livros_edit.php">
                                    <button name="editar" value="<?= $l["id"]; ?>" class="btn btn-warning btn-sm iguais">editar</button>
                                </form>
                                <br><br>
                                <form action="livros_apaga.php">
                                    <button name="apagar" value="<?= $l["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-12 my-4">
            <form action="livros_adiciona.php">
                <button name="editar" value="-1" class="btn btn-success btn-sm">Novo Livro</button>
            </form>
        </div>
    </div>
</main>