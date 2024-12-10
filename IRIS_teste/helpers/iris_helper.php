<?php

function getTodaIris(){
    $r= selectSQL("SELECT * FROM iris");
    return $r;
}

function getTituloIris($id){
    $r= selectSQLUnico("SELECT titulo FROM iris WHERE id='$id'");
    return $r["titulo"];
}

function getDataIris($id){
    $r= selectSQLUnico("SELECT data FROM iris WHERE id='$id'");
    return $r["data"];
}

function getTextoIris($id){
    $r= selectSQLUnico("SELECT texto FROM iris WHERE id='$id'");
    return $r["texto"];
}

function getActivoIris($id){
    $r= selectSQLUnico("SELECT activo FROM iris WHERE id='$id'");
    return $r["activo"];
}

function getTooltipIris($id){
    $r= selectSQLUnico("SELECT tooltip FROM iris WHERE id='$id'");
    return $r["tooltip"];
}

// function getIris($id){
//     $r= selectSQLUnico("SELECT  FROM iris WHERE id='$id'");
//     return $r[""];
// }




?>