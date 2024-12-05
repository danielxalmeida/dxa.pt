<?php

require_once("helpers/login_helper.php");

if(!estarLogado()){
    header("Location: index.php");
    exit();
}
else{
    $utilizador=utilizador();
}


?>