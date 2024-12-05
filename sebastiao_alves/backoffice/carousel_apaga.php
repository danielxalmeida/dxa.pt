<?php

$form=isset($_GET["apagar"]);

if(empty($form)){
    header("Location: carousel.php");
    exit();
}

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="carousel";
$id=$_GET["apagar"];

require("componentes/headerbackoffice.php");

require("mains/apagar/apaga$paginamain.php");

require("componentes/footerbackoffice.php");

?>