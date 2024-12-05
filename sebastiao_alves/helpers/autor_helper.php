<?php

function getImagemAutor(){
    $r=selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
    return $r["imagem"];
}

function getTextoAutor(){
    $r=selectSQLUnico("SELECT texto FROM autor WHERE id=1");
    return $r["texto"];
}

function geTextoAbreviadoAutor(){
    $r=substr(getTextoAutor(),0,1250);
    return $r;
}

?>