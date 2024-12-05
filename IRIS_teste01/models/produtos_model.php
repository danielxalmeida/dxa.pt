<?php

// if(isset($rotas[1])){
    // echo $detalhe;
    // echo $rotas[1];
    // $dados=getProdutoRota($rotas[1]);
// }
// getProdutoRota($rota[1]);
// echo getProdutoRota($rota_final[1], 'modelo');
$nomeModelo=getProdutoRota($rota_final[1], 'modelo');
$modelos = selectSQL("SELECT * FROM produtos WHERE modelo='$nomeModelo' ORDER BY id DESC LIMIT 5");

require("componentes/header.php");
require("views/produtos_view.php");
require("componentes/footer.php");

?>