<?php

function getTodosCarousel()
{
    $r = selectSQL("SELECT * FROM carousel");
    return $r;
}

function getTituloCarousel($id)
{
    $r = selectSQLunico("SELECT titulo FROM carousel WHERE id='$id'");
    return $r["titulo"];
}

function getTextoCarousel($id)
{
    $r = selectSQLunico("SELECT subtitulo FROM carousel WHERE id='$id'");
    return $r["subtitulo"];
}
function getObservacaoCarousel($id)
{
    $r = selectSQLunico("SELECT observacao FROM carousel WHERE id='$id'");
    return $r["observacao"];
}
function getTextoAbreviadoCarousel($id)
{
    $r = substr(getTextoCarousel($id), 0, 300) . "...";
    return $r;
}
function getImagemDesktopCarousel($id)
{
    $r = selectSQLunico("SELECT imagem_desktop FROM carousel WHERE id='$id'");
    return $r["imagem_desktop"];
}
function getImagemMobileCarousel($id)
{
    $r = selectSQLunico("SELECT imagem_mobile FROM carousel WHERE id='$id'");
    return $r["imagem_mobile"];
}
function getLinkCarousel($id)
{
    $r = selectSQLunico("SELECT link FROM carousel WHERE id='$id'");
    return $r["link"];
}
function getAtivoCarousel($id)
{
    $r = selectSQLunico("SELECT activo FROM carousel WHERE id='$id'");
    return $r["activo"];
}