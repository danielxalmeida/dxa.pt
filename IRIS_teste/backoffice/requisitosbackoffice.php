<?php

require_once("helpers/login_helper.php");

if(!estarLogado()){
    header("Location: index");
    exit();
}
else{
    $utilizador=utilizador();
}


?>