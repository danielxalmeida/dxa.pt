<?php

require_once("requisitos.php");

// echo "<pre>";
// print_r($_SERVER ["REQUEST_URI"]);
// echo "</pre>";

$rota_completa = $_SERVER["REQUEST_URI"];
// echo $rota_completa;
$rota_fixa = "/dxa.pt/iris_teste01/";

$rota = str_replace($rota_fixa, "", $rota_completa);
// echo $rota;
$rotas = explode("/", $rota);
$rota_form = explode("?", $rota);
// print_r($rota_form);
// echo explode("=",$rota_form[1]);
// $cat2sel=explode("=",$rota_form[1]);
// echo $cat2sel[1];
// echo $rota;
print_r($rotas);

if (isset($rotas[1])) {
    $detalhe = $rotas[1];
}

if (!empty($rota_form[1])) {
    $rota_final = $rota_form;
    // echo $rota_final[3];
    // print_r($rota_form);
} else {
    $rota_final = $rotas;
    // print_r($rota_form);
}
//  echo $rotas[2];
//  echo "<br>";

// $rota_backoffice = explode("?", $rotas[1]);

//  echo $rota_backoffice[0];
//  echo "<br>";
//  echo $rota_backoffice[1];
//  echo "<br>";
//  echo $rota_backoffice[2];
//  echo "<br>";
//  echo $rota_backoffice[3];
//  echo "<br>";
//  echo $rota_form[0];
//  echo "<br>";
//  echo $rota_final[3];

if ($rotas[3] != "backoffice") {

    switch ($rota_final[3]) {
        case "":
            require("models/home_model.php");
            break;
        case "home":
            require("models/home_model.php");
            break;
        case "modelos":
            require("models/modelos_model.php");
            break;
        case "modelos?":
            require("models/modelos_model.php");
            break;
        case "produtos":
            // echo $rotas[1];
            // VER ESTA VERIFICAÇÃO - DÁ ERO POR ACESSAR UM ID SUPERIOR AO QUE EXISTE
            if (!empty($rota_final[1])) {
                if (!empty(getProdutoRota($rota_final[1], 'nome'))) {
                    require("models/produtos_model.php");
                    break;
                } else {
                    $rotas[0] = "ERRO";
                    $rotas[1] = "";
                    require("models/404_model.php");
                    break;
                }
            } else {
                $rotas[0] = "ERRO";
                $rotas[1] = "";
                require("models/404_model.php");
                break;
            }
            // echo $rotas[1];
            break;
        case "envios":
            require("models/envios_model.php");
            break;
        case "contactos":
            require("models/contactos_model.php");
            break;
        case "iris":
            require("models/iris_model.php");
            break;
            // case "backoffice":
            //     require("backoffice/inicio.php");
            //     break;
        default:
            require("models/404_model.php");
            break;
    }
} else {
    $rota_backoffice = explode("?", $rotas[1]);
    if (isset($rotas[1])) {
        $rota_final[1] = $rota_backoffice[0];
    }
    if (isset($rotas[2])) {
        $rota_backoffice = explode("?", $rotas[2]);
        $rota_final[1] = $rota_backoffice[0];
    }
    if (isset($rotas[3])) {
        $rota_backoffice = explode("?", $rotas[3]);
        $rota_final[1] = $rota_backoffice[0];
    }
    if (isset($rotas[4])) {
        $rota_backoffice = explode("?", $rotas[4]);
        $rota_final[1] = $rota_backoffice[0];
        // echo $rota_backoffice[0];
    }

    // echo $rota_backoffice[1];
    switch ($rota_final[1]) {

        case "home":
            require("backoffice/home.php");
            break;
        case "layout":
            require("backoffice/layout.php");
            break;
        case "iris":
            require("backoffice/iris.php");
            break;
        case "envios":
            require("backoffice/envios.php");
            break;
        case "produtos":
            require("backoffice/produtos.php");
            break;
        case "contactos":
            require("backoffice/contactos.php");
            break;
        case "configuracoes":
            require("backoffice/configuracoes.php");
            break;
        case "home_edit":
            require("backoffice/home_edit.php");
            break;
        case "iris_edit":
            require("backoffice/iris_edit.php");
            break;
        case "iris_apaga":
            require("backoffice/iris_apaga.php");
            break;
        case "iris_adiciona":
            require("backoffice/iris_adiciona.php");
            break;
        case "envios_edit":
            require("backoffice/envios_edit.php");
            break;
        case "atualizarenvios":
            require("backoffice/mains/actualizar/atualizarenvios.php");
            break;
        case "atualizarhome":
            require("backoffice/mains/actualizar/atualizarhome.php");
            break;
        case "novairis":
            require("backoffice/mains/adicionar/novairis.php");
            break;
        case "novoprodutos":
            require("backoffice/mains/adicionar/novoprodutos.php");
            break;
        case "produtos_edit":
            require("backoffice/produtos_edit.php");
            break;
        case "produtos_apaga":
            require("backoffice/produtos_apaga.php");
            break;
        case "produtos_adiciona":
            require("backoffice/produtos_adiciona.php");
            break;
        case "atualizarprodutos":
            require("backoffice/mains/actualizar/atualizarprodutos.php");
            break;
        case "apagaoprodutos":
            require("backoffice/mains/apagar/apagaoprodutos.php");
            break;
        case "apagaairis":
            require("backoffice/mains/apagar/apagaairis.php");
            break;
        case "contactos_edit":
            require("backoffice/contactos_edit.php");
            break;
        case "atualizarcontactos":
            require("backoffice/mains/actualizar/atualizarcontactos.php");
            break;
        case "sair":
            require("backoffice/sair.php");
            break;
        case "inicio":
            require("backoffice/inicio.php");
            break;

        default:
            require("backoffice/404.php");
            break;
    }
}
