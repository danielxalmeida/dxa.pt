<?php

require_once("requisitos.php");

require_once("requisitosbackoffice.php");

$paginamain = "layout";



$form = isset($_GET["layout"]);

if ($form) {

    $layout = $_GET["layout"];

    foreach (getTodosDestaques() as $d) {
        $posicao = $d["id"];
        iduSQL("UPDATE home SET disposicao=$layout WHERE id='$posicao'");
    }
    // acesso("home",$id);
    // header("Location: layout");
    // exit();
}




require("componentes/headerbackoffice.php");

require("mains/main$paginamain.php");

require("componentes/footerbackoffice.php");
