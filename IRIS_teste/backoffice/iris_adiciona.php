<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");

$paginamain="iris";

$form=isset($_GET["editar"]);
if(!$form){
    header("Location: iris");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/adicionar/adicionar$paginamain.php");

require("componentes/footerbackoffice.php");

?>