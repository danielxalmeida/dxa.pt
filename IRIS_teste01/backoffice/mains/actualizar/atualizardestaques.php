<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form=isset($_GET["livro"]) && isset($_GET["ativo"]) && isset($_GET["info"]);

if($form){

    $id=intval($_GET["editar"]);
    
    $livro=$_GET["livro"];
    $ativo=$_GET["ativo"];
    $info=$_GET["info"];

    iduSQL("UPDATE destaques SET id_livros='$livro',activo='$ativo',observacao='$info' WHERE id='$id'");
    acesso("destaques",$id);
    header("Location: ../../destaques");
    exit();
}
?>