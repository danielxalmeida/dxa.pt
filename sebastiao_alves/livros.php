<?php

require_once("requisitos.php");

$paginamain="livros";

$id_livro=intval($_GET["livro"]);
if(empty(getTituloLivro($id_livro))){
    header("Location: index.php");
    exit();
}


require("componentes/header.php");

require("main/main$paginamain.php");

require("componentes/footer.php");

?>