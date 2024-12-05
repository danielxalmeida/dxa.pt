<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="livros";

$form=isset($_GET["editar"]);

if($form){
    $id=intval($_GET["editar"]);
}

require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>