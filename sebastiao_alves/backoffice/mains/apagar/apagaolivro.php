<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form = isset($_GET["apagar"]);
if ($form) {
    $apagar = $_GET["apagar"];

    foreach(getTodosLivros() as $v){
        if($v["id"] == $apagar){
            $id=$v['id'];
            foreach(getTodosDestaques() as $d){
                if($d["id_livros"]==$id){
                    $idd=$d["id"];
                    iduSQL("UPDATE destaques SET id_livros='',activo='0',observacao='' WHERE id='$idd'");
                }
            }
        }
    }

    iduSQL("DELETE FROM livros WHERE id='$apagar'");

    header("Location: ../../livros.php");
    exit();
}



?>