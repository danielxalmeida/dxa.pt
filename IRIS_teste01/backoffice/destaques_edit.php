<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");
$paginamain="destaques";

$form = isset($_GET["editar"]);
if ($form) {
    $editar = intval($_GET["editar"]);
    $id = intval($_GET["editar"]);
}else{
    header("Location: $pagina");
    exit();
}

require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>