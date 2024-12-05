<?php

require_once("../requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain="imprensa";

$form=isset($_GET["apagar"]);
if($form){
    $id=intval($_GET["apagar"]);
}
else{
    header("Location: imprensa.php");
    exit();
}


require("componentes/headerbackoffice.php");

require("mains/apagar/apaga$paginamain.php");

require("componentes/footerbackoffice.php");

?>