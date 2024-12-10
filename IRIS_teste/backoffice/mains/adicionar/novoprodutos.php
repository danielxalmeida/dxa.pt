<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form=isset($_GET["nome"]) && isset($_GET["modelo"]) && isset($_GET["tamanho"]) && isset($_GET["cor1"]) && isset($_GET["cor2"]) && isset($_GET["linkwts"]) && isset($_GET["preco"]) && isset($_GET["stock"]) && isset($_GET["imagem_1"]) && isset($_GET["texto"]) && isset($_GET["activo"]);
// echo 1;
if($form){

    // $id=intval($_GET["editar"]);
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


    date_default_timezone_set("Europe/Lisbon");
    $idnome=$_SESSION["utilizador"]["nome"];
    $idutilizador=$_SESSION["utilizador"]["id"];
    $data_atual = $idutilizador ."- ".$idnome . " a " . date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO produtos (nome,modelo,tamanho,cor1,cor2,linkwts,stock,texto,imagem_1,imagem_2,imagem_3,imagem_4,imagem_5,activo) VALUES ('$nome','$modelo','$tamanho','$cor1','$cor2','$linkwts','$stock','$texto','$imagem1','$imagem2','$imagem3','$imagem4','$imagem5','$activo')");

    // acesso("livros",id);
    header("Location: ../../produtos");
    exit();
}



?>
