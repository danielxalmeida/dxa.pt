<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form=isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["morada"]) && isset($_GET["whatsapp"]) && isset($_GET["whatsapp_link"]) && isset($_GET["facebook"]) && isset($_GET["instagram"]);

if($form){

    $id=1;
    $telefone=$_GET["telefone"];
    $morada=$_GET["morada"];
    $email=$_GET["email"];
    $wts=$_GET["whatsapp"];
    $wtslink=$_GET["whatsapp_link"];
    $facebook=$_GET["facebook"];
    $instagram=$_GET["instagram"];

    iduSQL("UPDATE contactosiris SET telefone='$telefone',morada='$morada',email='$email',whatsapp='$wts',whatsapp_link='$wtslink',facebook='$facebook',instagram='$instagram' WHERE id='$id'");
    // acesso("contactos",$id);
    header("Location: ../../contactos");
    exit();
}

?>