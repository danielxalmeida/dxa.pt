<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");

$paginamain="produtos";

$form=isset($_GET["apagar"]);


if(empty($form)){
    header("Location: produtos");
    exit();
}else{
    $id=intval($_GET["apagar"]);
}

require("componentes/headerbackoffice.php");

require("mains/apagar/apaga$paginamain.php");

require("componentes/footerbackoffice.php");

?>