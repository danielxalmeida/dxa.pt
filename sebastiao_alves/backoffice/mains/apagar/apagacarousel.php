<main class="container-md">
    <div class="col-12 p-0">
        <h3>Deseja apagar o carousel?</h3>
        <h4><?= getTituloCarousel($id); ?></h4>
        <img src="<?= getImagemDesktopCarousel($id); ?>" class="w-50" alt="">

        <p>
        <form action="mains/apagar/apagaocarousel.php" class="d-inline">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <button type="submit" class="btn btn-danger confirmacao">SIM</button>
        </form>
        <button type="button" class="btn btn-warning d-inline confirmacao" onclick="voltAtras();">NÃO</button>
        </p>

    </div>
</main>