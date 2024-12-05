<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form=isset($_GET["nome"]) && isset($_GET["modelo"]) && isset($_GET["tamanho"]) && isset($_GET["cor1"]) && isset($_GET["cor2"]) && isset($_GET["linkwts"]) && isset($_GET["preco"]) && isset($_GET["stock"]) && isset($_GET["imagem_1"]) && isset($_GET["texto"]) && isset($_GET["activo"]);
// echo 2;
// isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]) && isset($_GET["imagem_5"])
if($form){
    // echo 1;
    $id=intval($_GET["editar"]);
    $nome=$_GET["nome"];
    $modelo=$_GET["modelo"];
    $tamanho=$_GET["tamanho"];
    $cor1=$_GET["cor1"];
    $cor2=$_GET["cor2"];
    $linkwts=$_GET["linkwts"];
    $preco=$_GET["preco"];
    $stock=$_GET["stock"];
    $texto=$_GET["texto"];
    $imagem1=$_GET["imagem_1"];
    $imagem2=$_GET["imagem_2"];
    $imagem3=$_GET["imagem_3"];
    $imagem4=$_GET["imagem_4"];
    $imagem5=$_GET["imagem_5"];
    $activo=intval($_GET["activo"]);

    iduSQL("UPDATE produtos SET nome='$nome',modelo='$modelo',tamanho='$tamanho',cor1='$cor1',cor2='$cor2',linkwts='$linkwts',stock='$stock',texto='$texto',imagem_1='$imagem1',imagem_2='$imagem2',imagem_3='$imagem3',imagem_4='$imagem4',imagem_5='$imagem5',activo='$activo' WHERE id='$id'");
    // acesso("livros",id);
    header("Location: ../../produtos");
    exit();
}

?>