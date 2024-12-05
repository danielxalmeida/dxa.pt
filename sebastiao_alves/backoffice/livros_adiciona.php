<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="livros";

$form=isset($_GET["editar"]);


if(empty($form)){
    header("Location: livros.php");
    exit();
}

require("componentes/headerbackoffice.php");

require("mains/adicionar/adicionar$paginamain.php");

require("componentes/footerbackoffice.php");

?>