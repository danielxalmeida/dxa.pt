<?php

require_once("requisitos.php");

$paginamain="imprensa";

$pagina = 1;

$form = isset($_GET["pagina"]);

if ($form) {
    $pagina = intval($_GET["pagina"]);
}

$elementos_pagina = 2;

$ignora = ($pagina - 1) * $elementos_pagina;

$imprensa = selectSQL("SELECT * FROM imprensa WHERE activo='1' ORDER BY id DESC LIMIT $elementos_pagina OFFSET $ignora");

$mprod = selectSQLUnico("SELECT Count(id) as total FROM imprensa WHERE activo='1'");
$mmprod = intval($mprod["total"]);

$total_paginas = ceil($mmprod / $elementos_pagina);
$total_botoes = 2;

if(empty($imprensa)){
    header("Location: index.php");
    exit();
}

require("componentes/header.php");

require("main/main$paginamain.php");

require("componentes/footer.php");

?>