<?php

function getEnvios(){
    $r=selectSQL("SELECT * FROM envios");
    return $r;
}

function getTituloEnvios(){
    $r= selectSQLUnico("SELECT titulo FROM envios WHERE id='1'");
    return $r["titulo"];
}

function getDataEnvios(){
    $r= selectSQLUnico("SELECT data FROM envios WHERE id='1'");
    return $r["data"];
}

function getTextoEnvios(){
    $r= selectSQLUnico("SELECT texto FROM envios WHERE id='1'");
    return $r["texto"];
}

function getTooltipEnvios(){
    $r= selectSQLUnico("SELECT tooltip FROM envios WHERE id='1'");
    return $r["tooltip"];
}



?>