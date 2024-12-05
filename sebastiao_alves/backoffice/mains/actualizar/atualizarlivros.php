<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["detalhe"]) && isset($_GET["txt"]) && isset($_GET["imagem"]);

if($form){

    $id=intval($_GET["editar"]);
    
    $titulo=$_GET["titulo"];
    $activo=intval($_GET["ativo"]);
    $detalhe=$_GET["detalhe"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];

    iduSQL("UPDATE livros SET titulo='$titulo',activo='$activo',detalhes='$detalhe',imagem='$imagem',texto='$txt' WHERE id='$id'");
    acesso("livros",$id);
    header("Location: ../../livros.php");
    exit();
}

?>