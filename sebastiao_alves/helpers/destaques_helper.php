<?php

function getTodosDestaques(){
    $r= selectSQL("SELECT * FROM destaques");
    return $r;
}
function getObservacaoDestaque($id){
    $r= selectSQLunico("SELECT observacao FROM destaques WHERE id='$id'");
    return $r["observacao"];
}

function getLivroDestaque($id){
    $r= selectSQLunico("SELECT id_livros FROM destaques WHERE id='$id'");
    return $r["id_livros"];
}

function getAtivoDestaque($id){
    $r= selectSQLunico("SELECT activo FROM destaques WHERE id='$id'");
    return $r["activo"];
}


?>