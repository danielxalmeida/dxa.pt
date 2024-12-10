<?php

require_once("requisitos.php");

require_once("backoffice/requisitosbackoffice.php");

$paginamain="iris";



$form=isset($_GET["editar"]);
if($form){
    $editar=intval($_GET["editar"]);
    // echo $editar;
    if($editar>0){
        $dados=getTodaIris(intval($_GET["editar"]));
        // echo $editar;
        // echo $dados[$editar]["titulo"];
    }
}
else{
    header("Location: iris");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>