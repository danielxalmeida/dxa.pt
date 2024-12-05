<?php

require_once("../../../requisitos.php");
require_once("../../requisitosbackoffice.php");

$form = isset($_GET["apagar"]);
if ($form) {
    $apagar = $_GET["apagar"];
    iduSQL("DELETE FROM imprensa WHERE id='$apagar'");
    header("Location: ../../imprensa.php");
    exit();
}

?>