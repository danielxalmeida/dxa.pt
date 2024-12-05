<?php

$form=isset($_GET["editar"]);

if(empty($form)){
    header("Location: carousel.php");
    exit();
}

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="carousel";
$id=$_GET["editar"];

require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>