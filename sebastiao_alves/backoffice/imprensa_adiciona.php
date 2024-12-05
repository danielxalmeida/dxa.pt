<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="imprensa";

$form=isset($_GET["editar"]);
if(!$form){
    header("Location: imprensa.php");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/adicionar/adicionar$paginamain.php");

require("componentes/footerbackoffice.php");

?>