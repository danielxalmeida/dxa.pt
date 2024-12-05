<main class="container-md">
    <div class="col-12 p-0">
        <h3>Deseja apagar a postagem?</h3>
        <img src="<?= getDadosimprensa($id)["imagem"];?>" alt="">
        <p>
            <form action="mains/apagar/apagaa<?=$paginamain;?>.php" class="d-inline">
                <input type="hidden" name="apagar" value="<?= $id; ?>">
                <button type="submit" class="btn btn-danger confirmacao">SIM</button>
            </form>
            <button type="button" class="btn btn-warning d-inline confirmacao" onclick="voltAtras();">NÃO</button>
        </p>
    </div>
</main>
