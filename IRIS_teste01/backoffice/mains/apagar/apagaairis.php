<?php

require_once("requisitos.php");
require_once("backoffice/requisitosbackoffice.php");

$form = isset($_GET["apagar"]);
if ($form) {
    $apagar = $_GET["apagar"];
    iduSQL("DELETE FROM iris WHERE id='$apagar'");
    header("Location: ../../iris");
    exit();
}

?>