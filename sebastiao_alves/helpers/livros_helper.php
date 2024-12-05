<?php

function getListaLivros(){
    $r= selectSQL("SELECT titulo,id,activo FROM livros ORDER BY titulo ASC");
    return $r;
}
function getTodosLivros(){
    $r= selectSQL("SELECT * FROM livros ORDER BY id ASC");
    return $r;
}

function getTituloLivro($id){
    $r= selectSQLunico("SELECT titulo FROM livros WHERE id='$id'");
    return $r["titulo"];
}
function getObservacaoLivro($id){
    $r= selectSQLunico("SELECT observacao FROM livros WHERE id='$id'");
    return $r["observacao"];
}
function getDetalhesLivro($id){
    $r= selectSQLunico("SELECT detalhes FROM livros WHERE id='$id'");
    return $r["detalhes"];
}

function getTextoLivro($id){
    $r= selectSQLunico("SELECT texto FROM livros WHERE id='$id'");
    return $r["texto"];
}
function getTextoAbreviadoLivro($id){
    $r= substr(getTextoLivro($id),0,120)."...";
    return $r;
}
function getTextoAbreviadoLivro1000($id){
    $r= substr(getTextoLivro($id),0,1000);
    return $r;
}
function getTextoAbreviadoLivro1200($id){
    $r= substr(getTextoLivro($id),0,1200);
    return $r;
}
function getTextoAbreviadoLivro2000($id){
    $r= substr(getTextoLivro($id),0,2000);
    return $r;
}
function getTextoAbreviadoLivro200010000($id){
    $r= substr(getTextoLivro($id),2000,10000);
    return $r;
}
function getImagemLivro($id){
    $r= selectSQLunico("SELECT imagem FROM livros WHERE id='$id'");
    return $r["imagem"];
}
function getAtivoLivro($id)
{
    $r = selectSQLunico("SELECT activo FROM livros WHERE id='$id'");
    return $r["activo"];
}

?>