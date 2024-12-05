<main class="container my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
            <table class="table table table-striped table-hover table-carousel">
                <thead class="text-uppercase table-active">
                    <th>ID</th>
                    <th>titulo</th>
                    <th>data</th>
                    <th>texto</th>
                    <th>ativo</th>
                    <th>opções</th>
                </thead>
                <tbody>
                    <?php foreach (getTodaIris() as $iris) : ?>
                        <tr>
                            <td><?= $iris["id"]; ?></td>
                            <td><?= $iris["titulo"]; ?></td>
                            <td><?= $iris["data"]; ?></td>
                            <td><?= substr($iris["texto"], 0, 300) . "..."; ?></td>
                            <td><?= $iris["activo"] == 1 ? "Sim" : "Não"; ?></td>
                            <td width=155px>
                                <form action="iris_edit">
                                    <button name="editar" value="<?= $iris["id"]; ?>" class="btn btn-warning btn-sm iguais">editar</button>
                                </form>
                                <br><br>
                                <form action="iris_apaga">
                                    <button name="apagar" value="<?= $iris["id"]; ?>" class="btn btn-outline-danger btn-sm iguais">apagar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-12 my-4">
            <form action="iris_adiciona">
                <button name="editar" value="-1" class="btn btn-success btn-sm">Nova postagem</button>
            </form>
        </div>
    </div>
</main>