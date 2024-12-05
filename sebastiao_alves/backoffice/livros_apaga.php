<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="livro";

$form=isset($_GET["apagar"]);


if(empty($form)){
    header("Location: livros.php");
    exit();
}else{
    $id=intval($_GET["apagar"]);
}

require("componentes/headerbackoffice.php");

require("mains/apagar/apaga$paginamain.php");

require("componentes/footerbackoffice.php");

?>