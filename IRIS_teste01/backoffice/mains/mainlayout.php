<!-- 
    Definir o LAYOUT da pagina home
 -->

<main class="container my-5">
    <div class="row w-100 mx-2">
        <div class="col-12 my-4 d-flex flex-column gap-2">
        
        <form action="">
            <table class="table table table-striped table-hover table-carousel">
                    <thead class="text-uppercase table-active">
                        <th>Opção</th>
                        <th colspan="2">Exemplo</th>
                    </thead>
                    <tbody class="align-items-center justify-content-center">
                        <tr>
                            <td>
                                <input type="radio" name="layout" id="op1" value=1 required <?= (getGrid() == 1 ? 'checked="checked"' : ""); ?>>
                            </td>
                            <td>
                                <label for="op1">
                                    <img src="../imagens/grelha1.png" alt="grelha">
                                </label>
                            </td>
                            <td>
                                Grelha
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" name="layout" id="op0" value=0 required <?= (getGrid(1) == 0 ? 'checked="checked"' : ""); ?>>
                            </td>
                            <td>
                                <label for="op0">
                                    <img src="../imagens/linha1.png" alt="linha">
                                </label>
                            </td>
                            <td>
                                Linha
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button name="editar" value="layout" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <?php if(isset($_GET["layout"])): ?>
            <div class="row w-75 py-5 mx-auto bg-success bg-opacity-50 border border-1 border-light rounded-2 d-flex justify-content-center">
            <h1 class="">FEITO</h1>
        </div>
        <?php endif;?>
    </div>
</main>