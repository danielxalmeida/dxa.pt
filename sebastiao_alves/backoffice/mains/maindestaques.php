<main class="container my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach (getTodosDestaques() as $d) : ?>
                        <tr>
                            <td><?= $d["id"]; ?></td>
                            <?php if (!empty($d["id_livros"])) : ?>
                                <td><img src="<?= getImagemLivro(intval($d["id_livros"])); ?>" alt="capa"></td>
                                <td><?= getTituloLivro(intval($d["id_livros"])); ?></td>
                                <td><?= $d["observacao"]; ?></td>
                            <?php else : ?>
                                <td></td>
                                <td></td>
                                <td></td>
                            <?php endif; ?>
                            <td width=155px>
                                <form action="destaques_edit.php">
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