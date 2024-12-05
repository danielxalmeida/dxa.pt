<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");

$paginamain="iris";

$form=isset($_GET["apagar"]);
if($form){
    $id=intval($_GET["apagar"]);
}
else{
    header("Location: iris");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/apagar/apaga$paginamain.php");

require("componentes/footerbackoffice.php");

?>