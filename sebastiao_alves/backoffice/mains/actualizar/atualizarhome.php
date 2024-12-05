<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form=isset($_GET["imagem"]) && isset($_GET["txt_bem"]) && isset($_GET["link"]) && isset($_GET["txt_livros"]);

if($form){
    $id=1;
    $imagem=$_GET["imagem"];
    $texto_bem=$_GET["txt_bem"];
    $texto_livros=$_GET["txt_livros"];
    $link=$_GET["link"];
    iduSQL("UPDATE home SET imagem='$imagem',textobemvindo='$texto_bem',texto_livros='$texto_livros',link='$link' WHERE id='$id'");
    acesso("home",$id);
    header("Location: ../../home.php");
    exit();
}

?>