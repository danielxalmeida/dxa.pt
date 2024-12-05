<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]);

if($form){

    $id=1;
    
    $instagram=$_GET["instagram"];
    $facebook=$_GET["facebook"];
    $linkedin=$_GET["linkedin"];

    iduSQL("UPDATE redes SET instagram='$instagram',facebook='$facebook',linkedin='$linkedin' WHERE id='$id'");
    acesso("redes",$id);
    header("Location: ../../redes.php");
    exit();
}

?>