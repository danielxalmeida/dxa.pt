<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["imagem"]) && isset($_GET["txt"]);

if($form){
    $id=1;
    $imagem=$_GET["imagem"];
    $texto=$_GET["txt"];
    iduSQL("UPDATE autor SET imagem='$imagem',texto='$texto' WHERE id='$id'");
    acesso("autor",$id);
    header("Location: ../../autor.php");
    exit();
}

?>