<?php

function getImagemHome(){
    $r=selectSQLUnico("SELECT imagem FROM home WHERE id=1");
    return $r["imagem"];
}

function getTextoUltimosLivrosHome(){
    $r=selectSQLUnico("SELECT texto_livros FROM home WHERE id=1");
    return $r["texto_livros"];
}

function getTextoAutorHome(){
    $r=selectSQLUnico("SELECT textobemvindo FROM home WHERE id=1");
    return $r["textobemvindo"];
}
function getTextoAbreviadoAutorHome(){
    $r=substr(getTextoAutorHome(),0,900);
    return $r;
}
function getLinkHome(){
    $r=selectSQLUnico("SELECT link FROM home WHERE id=1");
    return $r["link"];
}


?>