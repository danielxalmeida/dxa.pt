<?php

function getTodosProdutos(){
    $r= selectSQL("SELECT * FROM produtos");
    return $r;
}

function getProdutoRota($id,$ii){
    $r= selectSQLUnico("SELECT * FROM produtos WHERE id='$id'");
    return $r[$ii];
}

function getBrinconome($id){
    $r= selectSQLUnico("SELECT nome FROM produtos WHERE id='$id'");
    return $r["nome"];
}
function getBrincomodelo($id){
    $r= selectSQLUnico("SELECT modelo FROM produtos WHERE id='$id'");
    return $r["modelo"];
}
function getBrincotamanho($id){
    $r= selectSQLUnico("SELECT tamanho FROM produtos WHERE id='$id'");
    return $r["tamanho"];
}
function getBrincocor1($id){
    $r= selectSQLUnico("SELECT cor1 FROM produtos WHERE id='$id'");
    return $r["cor1"];
}
function getBrincocor2($id){
    $r= selectSQLUnico("SELECT cor2 FROM produtos WHERE id='$id'");
    return $r["cor2"];
}
function getBrincopreco($id){
    $r= selectSQLUnico("SELECT preco FROM produtos WHERE id='$id'");
    return $r["preco"];
}
function getBrincolink($id){
    $r= selectSQLUnico("SELECT link FROM produtos WHERE id='$id'");
    return $r["link"];
}
function getBrincolinkwts($id){
    $r= selectSQLUnico("SELECT linkwts FROM produtos WHERE id='$id'");
    return $r["linkwts"];
}
function getBrincostock($id){
    $r= selectSQLUnico("SELECT stock FROM produtos WHERE id='$id'");
    return $r["stock"];
}
function getBrincoimagem_1($id){
    $r= selectSQLUnico("SELECT imagem_1 FROM produtos WHERE id='$id'");
    return $r["imagem_1"];
}
function getBrincoimagem_2($id){
    $r= selectSQLUnico("SELECT imagem_2 FROM produtos WHERE id='$id'");
    return $r["imagem_2"];
}
function getBrincoimagem_3($id){
    $r= selectSQLUnico("SELECT imagem_3 FROM produtos WHERE id='$id'");
    return $r["imagem_3"];
}
function getBrincoimagem_4($id){
    $r= selectSQLUnico("SELECT imagem_4 FROM produtos WHERE id='$id'");
    return $r["imagem_4"];
}
function getBrincoimagem_5($id){
    $r= selectSQLUnico("SELECT imagem_5 FROM produtos WHERE id='$id'");
    return $r["imagem_5"];
}
function getBrincotexto($id){
    $r= selectSQLUnico("SELECT texto FROM produtos WHERE id='$id'");
    return $r["texto"];
}
function getBrincoactivo($id){
    $r= selectSQLUnico("SELECT activo FROM produtos WHERE id='$id'");
    return $r["activo"];
}


function getBrincoDestaque($id){
    $r= selectSQLUnico("SELECT id FROM produtos WHERE id='$id'");
    return $r["id"];
}

function getNomeBrinco($id){
    $r= selectSQLUnico("SELECT nome FROM produtos WHERE id='$id'");
    return $r["nome"];
}

function getProdutoImagem($id){
    $r= selectSQLUnico("SELECT imagem_1 FROM produtos WHERE id='$id'");
    return $r["imagem_1"];
}


?>