<?php

$form_a = isset($_GET["cat1"]);
$form_b = isset($_GET["cat2"]);
$form_a_b = isset($_GET["cat1"]) && isset($_GET["cat2"]);

if ($form_a_b) {
    $tamanho = $_GET["cat1"];
    $modelo = $_GET["cat2"];
    $pesquisa = getProdutosTamanhoModelos($tamanho, $modelo);
} else {
    $tamanho=1;
    $modelo=1;
    if ($form_a) {
        $tamanho = $_GET["cat1"];
        $pesquisa = getProdutosTamanho($tamanho);
    }
    if ($form_b) {
        $modelo = $_GET["cat2"];
        $pesquisa = getProdutosModelos($modelo);
    }
}
if(!$form_a && !$form_b){
    
    // header("location: iris");
    // exit;
}

// echo $tamanho;
// echo "<br>";
// echo $modelo;


require("componentes/header.php");
require("views/modelos_view.php");
require("componentes/footer.php");

?>