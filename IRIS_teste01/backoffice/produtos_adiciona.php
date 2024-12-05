<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");

$paginamain="produtos";

$form=isset($_GET["editar"]);


if(empty($form)){
    header("Location: produtos");
    exit();
}

require("componentes/headerbackoffice.php");

require("mains/adicionar/adicionar$paginamain.php");

require("componentes/footerbackoffice.php");

?>