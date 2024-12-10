<?php


function utilizador(){
    $utilizador=$_SESSION["utilizador"];
    return $utilizador;
}

function getNomeUtilizadorInicio($id){
    $data=selectSQL("SELECT nome FROM utilizador WHERE id='$id'");
    return $data;
}
function getultimoUtilizadorInicio($id){
    $data=selectSQL("SELECT ultimo FROM acessos WHERE id='$id'");
    return $data;
}
?>