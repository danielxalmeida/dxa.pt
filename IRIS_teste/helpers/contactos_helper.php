<?php

function getContactos($push){
    $r= selectSQLUnico("SELECT $push FROM contactosiris WHERE id=1");
    return $r["$push"];
}




?>