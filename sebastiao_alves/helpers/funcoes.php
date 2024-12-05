<?php

require_once("base_dados.php");

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

function iduSQL($sql){
    global $pdo;
    $solicitacao=$pdo->query($sql);
}

function acesso($tabela,$id){
    date_default_timezone_set("Europe/Lisbon");
    $idnome=$_SESSION["utilizador"]["nome"];
    $idutilizador=$_SESSION["utilizador"]["id"];
    $data_atual = $idutilizador ."- ".$idnome . " a " . date("H:i:s - d/m/Y");
    iduSQL("UPDATE $tabela SET ultima_edicao='$data_atual' WHERE id='$id'");
}

// Para Login:

function verificaLoginPass($username,$pass){

    $entrar=selectSQLUnico("SELECT * FROM utilizador WHERE username='$username'");

    if(!empty($entrar)){
        
        if(password_verify($pass,$entrar["password"])){
            session_start();
            $_SESSION["utilizador"]=$entrar;
            return $entrar;
        }
    }
}

function verificaLoginPass2($username,$pass){
    
    $entrar=selectSQLUnico("SELECT * FROM utilizador WHERE username='$username'");

    if(!empty($entrar)){
        
        if(password_verify($pass,$entrar["password"])){
            $_SESSION["utilizador"]=$entrar;
            return $entrar;
        }
    }

    // return
}

function estarLogado(){
    session_start();

    if(!empty($_SESSION["utilizador"])){
        return true;
    }else{
        return false;
    }
}

function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    exit();
}


?>