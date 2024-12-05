<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["data"]) && isset($_GET["txt"]);

if($form){

    $id=intval($_GET["editar"]); 
    $titulo=$_GET["titulo"];
    $data=$_GET["data"];
    $activo=intval($_GET["ativo"]);
    $txt=$_GET["txt"];
    // $imagem=$_GET["imagem"];
    
    iduSQL("UPDATE iris SET titulo='$titulo',data='$data',activo='$activo',texto='$txt' WHERE id='$id'");
    // acesso("imprensa",$id);
    header("Location: ../../iris");
    exit();
}

?>