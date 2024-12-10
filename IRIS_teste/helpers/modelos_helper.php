<?php

// function getTodosProdutos(){
//     $r= selectSQL("SELECT * FROM produtos");
//     return $r;
// }

function getProdutosTamanho($tamanho){
    $r= selectSQL("SELECT * FROM produtos WHERE tamanho like '%$tamanho'");
    return $r;
}
function getProdutosModelos($modelo){
    $r= selectSQL("SELECT * FROM produtos WHERE modelo like '%$modelo'");
    return $r;
}
function getProdutosTamanhoModelos($tamanho,$modelo){
    $r= selectSQL("SELECT * FROM produtos WHERE tamanho LIKE '%$tamanho' AND modelo LIKE'%$modelo'");
    return $r;
}

function getModelos(){
    $r= selectSQL("SELECT DISTINCT modelo FROM produtos");
    // $resultado=array_unique($r);
    // return $resultado;
    return $r;

}



?>