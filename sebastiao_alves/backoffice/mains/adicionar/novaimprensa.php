<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["titulo"]) && isset($_GET["ativo"]) && isset($_GET["txt"]) && isset($_GET["imagem"]) && isset($_GET["data"]);

if($form){
    $titulo=$_GET["titulo"];
    $activo=intval($_GET["ativo"]);
    $data=$_GET["data"];
    $txt=$_GET["txt"];
    $imagem=$_GET["imagem"];
    
    date_default_timezone_set("Europe/Lisbon");
    $idnome=$_SESSION["utilizador"]["nome"];
    $idutilizador=$_SESSION["utilizador"]["id"];
    $data_atual = $idutilizador ."- ".$idnome . " a " . date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO imprensa (titulo,imagem,activo,data,texto,ultima_edicao) VALUES ('$titulo','$imagem','$activo','$data','$txt','$data_atual')");

    header("Location: ../../imprensa.php");
}



?>
