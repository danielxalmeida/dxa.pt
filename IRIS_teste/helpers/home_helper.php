<?php

function getTodosDestaques(){
    $r= selectSQL("SELECT * FROM home");
    return $r;
}

function getGrid(){
    $r= selectSQLUnico("SELECT disposicao FROM home WHERE id=1");
    return $r["disposicao"];
}

function getActivo($id){
    $r= selectSQLUnico("SELECT activo FROM home WHERE id='$id'");
    return $r["activo"];
}

function getProdutoID($id){
    $r= selectSQLUnico("SELECT id_produto FROM home WHERE id='$id'");
    return $r["id_produto"];
}

?>