<?php

require_once("../backoffice/base_dados.php");

function selectSQL($sql){
    global $pdo;
    $consulta=$pdo->query($sql);
    $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}
function selectSQLUnico($sql){
    global $pdo;
    $consulta=$pdo->query($sql);
    $resultado=$consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

?>