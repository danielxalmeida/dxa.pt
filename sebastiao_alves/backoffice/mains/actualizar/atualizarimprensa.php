<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["data"]) && isset($_GET["txt"]) && isset($_GET["imagem"]);

if($form){

    $id=intval($_GET["editar"]); 
    $titulo=$_GET["titulo"];
    $data=$_GET["data"];
    $activo=intval($_GET["ativo"]);
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];
    
    iduSQL("UPDATE imprensa SET titulo='$titulo',data='$data',activo='$activo',imagem='$imagem',texto='$txt' WHERE id='$id'");
    acesso("imprensa",$id);
    header("Location: ../../imprensa.php");
    exit();
}

?>