<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");


$form=isset($_GET["brinco"]) && isset($_GET["ativo"]);

if($form){

    $id=intval($_GET["editar"]);
    $brinco=$_GET["brinco"];
    $ativo=$_GET["ativo"];


    iduSQL("UPDATE home SET id_produto='$brinco',activo='$ativo' WHERE id='$id'");
    // acesso("destaques",$id);
    header("Location: ../../home");
    exit();
}

// $form=isset($_GET["imagem"]) && isset($_GET["txt_bem"]) && isset($_GET["link"]) && isset($_GET["txt_livros"]);

// if($form){
//     $id=1;
//     $imagem=$_GET["imagem"];
//     $texto_bem=$_GET["txt_bem"];
//     $texto_livros=$_GET["txt_livros"];
//     $link=$_GET["link"];
//     iduSQL("UPDATE home SET imagem='$imagem',textobemvindo='$texto_bem',texto_livros='$texto_livros',link='$link' WHERE id='$id'");
//     acesso("home",$id);
//     header("Location: ../../home.php");
//     exit();
// }

?>