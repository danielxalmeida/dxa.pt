<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["smai"]) && isset($_GET["txt"]) && isset($_GET["imgdesk"]) && isset($_GET["imgmob"]) && isset($_GET["destaque"]) ;

if($form){
    $id=intval($_GET["editar"]);
    
    $titulo=$_GET["titulo"];
    $destaque=$_GET["destaque"];
    $activo=intval($_GET["ativo"]);
    $posicao=intval($_GET["posicao"]);
    $smai=$_GET["smai"];
    $txt=$_GET["txt"];
    $imgdesk=$_GET["imgdesk"];
    $imgmob=$_GET["imgmob"];

    acesso("carousel",$id);
    iduSQL("UPDATE carousel SET titulo='$titulo',observacao='$destaque',activo='$activo',link='$smai',subtitulo='$txt',imagem_desktop='$imgdesk',imagem_mobile='$imgmob' WHERE id='$id'");
    header("Location: ../../carousel.php");
    exit();
}

?>