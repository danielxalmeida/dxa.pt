<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="imprensa";

$form=isset($_GET["editar"]);
if($form){
    $editar=intval($_GET["editar"]);
    if($editar>0){
        $dados=getDadosImprensa($_GET["editar"]);
    }
}
else{
    header("Location: imprensa.php");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/editar/edita$paginamain.php");

require("componentes/footerbackoffice.php");

?>