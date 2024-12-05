<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["morada"]) && isset($_GET["horario"]);

if($form){

    $id=1;
    $telefone=$_GET["telefone"];
    $horario=$_GET["horario"];
    $morada=$_GET["morada"];
    $email=$_GET["email"];

    iduSQL("UPDATE contactos SET telefone='$telefone',horario='$horario',morada='$morada',email='$email' WHERE id='$id'");
    acesso("contactos",$id);
    header("Location: ../../contactos.php");
    exit();
}

?>