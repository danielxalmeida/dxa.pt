<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["smai"]) && isset($_GET["txt"]) && isset($_GET["imgdesk"]) && isset($_GET["imgmob"]) && isset($_GET["destaque"]) ;

if($form){

    $titulo=$_GET["titulo"];
    $destaque=$_GET["destaque"];
    $activo=intval($_GET["ativo"]);
    $posicao=intval($_GET["posicao"]);
    $smai=$_GET["smai"];
    $txt=$_GET["txt"];
    $imgdesk=$_GET["imgdesk"];
    $imgmob=$_GET["imgmob"];

    date_default_timezone_set("Europe/Lisbon");
    $idnome=$_SESSION["utilizador"]["nome"];
    $idutilizador=$_SESSION["utilizador"]["id"];
    $data_atual = $idutilizador ."- ".$idnome . " a " . date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO carousel (titulo,observacao,activo,link,subtitulo,imagem_desktop,imagem_mobile,ultima_edicao) VALUES ('$titulo','$destaque','$activo','$smai','$txt','$imgdesk','$imgmob','$data_atual')");

    header("Location: ../../carousel.php");

}

?>