<main class="container-md">
    <div class="col-12 p-0">
        <h3>Deseja apagar o produto?</h3>
        <h4><?= getBrinconome($id); ?></h4>
        <img src="<?= getBrincoimagem_1($id); ?>" alt="">
        <p>
        <form action="mains/apagar/apagao<?= $paginamain; ?>" class="d-inline">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <button type="submit" class="btn btn-danger confirmacao">SIM</button>
        </form>
        <button type="button" class="btn btn-warning d-inline confirmacao" onclick="voltAtras();">NÃO</button>
        </p>
    </div>
</main>