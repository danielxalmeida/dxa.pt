<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form = isset($_GET["apagar"]);
if ($form) {
    $apagar = $_GET["apagar"];

    foreach(getTodosProdutos() as $v){
        if($v["id"] == $apagar){
            $id=$v['id'];
            foreach(getTodosDestaques() as $d){
                if($d["id_produtos"]==$id){
                    $idd=$d["id"];
                    iduSQL("UPDATE home SET id_produtos='',activo='0',observacao='' WHERE id='$idd'");
                }
            }
        }
    }

    iduSQL("DELETE FROM produtos WHERE id='$apagar'");

    header("Location: ../../produtos");
    exit();
}



?>