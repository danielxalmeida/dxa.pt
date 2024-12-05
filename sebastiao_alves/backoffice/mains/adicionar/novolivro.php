<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["detalhe"]) && isset($_GET["txt"]) && isset($_GET["imagem"]);

if($form){

    $titulo=$_GET["titulo"];
    $activo=intval($_GET["ativo"]);
    $detalhe=$_GET["detalhe"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];

    date_default_timezone_set("Europe/Lisbon");
    $idnome=$_SESSION["utilizador"]["nome"];
    $idutilizador=$_SESSION["utilizador"]["id"];
    $data_atual = $idutilizador ."- ".$idnome . " a " . date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO livros (titulo,activo,detalhes,imagem,texto,ultima_edicao) VALUES ('$titulo','$activo','$detalhe','$imagem','$txt','$data_atual')");
    
    header("Location: ../../livros.php");
}



?>
