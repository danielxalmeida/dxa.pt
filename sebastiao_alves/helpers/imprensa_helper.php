<?php

function getTodosimprensa(){
    $r= selectSQL("SELECT * FROM imprensa");
    return $r;
}
function getTodosimprensaLista(){
    $r= selectSQL("SELECT * FROM imprensa ORDER BY id DESC");
    return $r;
}

function getDadosImprensa($id){
    $r= selectSQLunico("SELECT * FROM imprensa WHERE id='$id'");
    return $r;
}

?>