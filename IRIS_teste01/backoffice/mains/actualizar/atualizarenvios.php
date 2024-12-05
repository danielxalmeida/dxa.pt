<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["data"]) && isset($_GET["txt"]);



if($form){
    $id=1;
    $titulo=$_GET["titulo"];
    $data=$_GET["data"];
    $texto=$_GET["txt"];
    iduSQL("UPDATE envios SET titulo='$titulo',data='$data',texto='$texto' WHERE id='$id'");
    // acesso("autor",$id);
    header("Location: ../../envios");
    exit();
}

?>