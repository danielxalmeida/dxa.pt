<?php
require("valores.php");

$variables = [];

foreach ($_GET as $key => $value) {

    if (isset($value) && !empty($value)) {
        $intValue = intval($value);

        if ($intValue === 0 || $intValue > 0) {
            $variables[$key] = $intValue;
        } else {
            echo "Error: Invalid value for $key: $value";
        }
    }
}

if (isset($variables["salaestar"])) {

    $areaChaoSala = $variables["Salac"] * $variables["Salal"];
    $areaParedesSala = ($variables["Salac"] + $variables["Salal"]) * 2 * $variables["Salaa"];


    switch ($variables["Salatipopavimentos"]) {
        case 1:
            $tipoChaoSala = "Madeira";
            $pavimentosTipoSala = $pavimentosMadeira;
            break;

        case 2:
            $tipoChaoSala = "Flutuante";
            $pavimentosTipoSala = $pavimentosFlutuante;
            break;

        case 3:
            $tipoChaoSala = "Vinil";
            $pavimentosTipoSala = $pavimentosVinil;
            break;

        case 4:
            $tipoChaoSala = "Cerâmica";
            $pavimentosTipoSala = $pavimentosCeramica;
            break;
    }

    switch ($variables["Salaqualidadepavimentos"]) {
        case 1:
            $qualidadeChaoSala = "Média";
            $pavimentosQualidadeSala = $pavimentosQmedia;
            break;

        case 2:
            $qualidadeChaoSala = "Média-Alta";
            $pavimentosQualidadeSala = $pavimentosQmediaAlta;
            break;

        case 3:
            $qualidadeChaoSala = "Superior";
            $pavimentosQualidadeSala = $pavimentosQsuperior;
            break;
    }

    switch ($variables["Salatipo"]) {
        case 1:
            $tipoTetoSala = "Estuque";
            $TetoTipoSala = $tetosEstuque;
            break;

        case 2:
            $tipoTetoSala = "tecto falso de gesso hidrófugo";
            $TetoTipoSala = $tetosHidro;
            break;

        case 3:
            $tipoTetoSala = "tecto falso de gesso cartonado";
            $TetoTipoSala = $tetosCatonado;
            break;

        case 4:
            $tipoTetoSala = "isolamento térmico/acustico";
            $TetoTipoSala = $tetosAcustico;
            break;
    }

    switch ($variables["Salatinta"]) {
        case 1:
            $qualidadeTetoSala = "Tinta Média";
            $TetoQualidadeSala = $tetosTintaS;
            break;

        case 2:
            $qualidadeTetoSala = "Tinta Superior";
            $TetoQualidadeSala = $tetosTintaN;
            break;
    }

    switch ($variables["Salatipoparedes"]) {
        case 1:
            $tipoParedesSala = "Estuque";
            $ParedesTipoSala = $paredesEstuque;
            break;

        case 2:
            $tipoParedesSala = "Gesso Cartonado (Pladur)";
            $ParedesTipoSala = $paredesPladur;
            break;

        case 3:
            $tipoParedesSala = "Forra térmica / Acústica";
            $ParedesTipoSala = $paredesTermica;
            break;
    }

    switch ($variables["Salaqualidadeparedes"]) {
        case 3:
            $qualidadeParedesSala = "Tinta plástica Superior";
            $ParedesQualidadeSala = $paredesTintaPS;
            break;

        case 2:
            $qualidadeParedesSala = "Tinta plástica";
            $ParedesQualidadeSala = $paredesTintaP;
            break;

        case 1:
            $qualidadeParedesSala = "Tinta simples";
            $ParedesQualidadeSala = $paredesTintaN;
            break;
    }
}

// Quartos:
if (isset($variables["quartos"])) {
    $areaChaoQuarto[0] = 0;
    $areaParedesQuarto[0] = 0;
    $custoChaoQuarto[0] = 0;
    $custoTetoQuarto[0] = 0;
    $custoParedesQuarto[0] = 0;
    $custoQuarto[0] = 0;
    for ($i = 0; $i < $variables["numquartos"]; $i++) {
        $custoQuarto[$i + 1] = 0;

        $tppavimento = "Quarto" . ($i + 1) . "tipopavimentos";



        switch ($variables[$tppavimento]) {
            case 1:
                $tipopavimento = "Madeira";
                $pavimentosTipoQuarto = $pavimentosMadeira;
                break;
            case 2:
                $tiptipopavimentoo = "Flutuante";
                $pavimentosTipoQuarto = $pavimentosFlutuante;
                break;
            case 3:
                $tipopavimento = "Vinil";
                $pavimentosTipoQuarto = $pavimentosVinil;
                break;
            case 4:
                $tipopavimento = "Cerâmica";
                $pavimentosTipoQuarto = $pavimentosCeramica;
                break;
        }
        $tipoChaoQuarto[$i + 1] = $tipopavimento;
        $tipoPavimentoQuarto[$i + 1] = $pavimentosTipoQuarto;

        $qppavimento = "Quarto" . ($i + 1) . "qualidadepavimentos";

        switch ($variables[$qppavimento]) {
            case 1:
                $qualidadepavimento = "Média";
                $pavimentosQualidadeQuarto = $pavimentosQmedia;
                break;
            case 2:
                $qualidadepavimento = "Média-Alta";
                $pavimentosQualidadeQuarto = $pavimentosQmediaAlta;
                break;
            case 3:
                $qualidadepavimento = "Superior";
                $pavimentosQualidadeQuarto = $pavimentosQsuperior;
                break;
        }
        $qualidadeChaoQuarto[$i + 1] = $qualidadepavimento;
        $QualidadePavimentoQuarto[$i + 1] = $pavimentosQualidadeQuarto;

        $tpteto = "Quarto" . ($i + 1) . "tipo";

        switch ($variables[$tpteto]) {
            case 1:
                $tipoTeto = "Estuque";
                $TetoTipoQuarto = $tetosEstuque;
                break;
            case 2:
                $tipoTeto = "tecto falso de gesso hidrófugo";
                $TetoTipoQuarto = $tetosHidro;
                break;
            case 3:
                $tipoTeto = "tecto falso de gesso cartonado";
                $TetoTipoQuarto = $tetosCatonado;
                break;
            case 4:
                $tipoTeto = "isolamento térmico/acustico";
                $TetoTipoQuarto = $tetosAcustico;
                break;
        }
        $tipoTetoQuarto[$i + 1] = $tipoTeto;
        $TetoTipoQuartos[$i + 1] = $TetoTipoQuarto;

        $qpteto = "Quarto" . ($i + 1) . "tinta";

        switch ($variables[$qpteto]) {
            case 1:
                $qualidadeTetoQ = "Tinta Média";
                $TetoQualidadeQ = $tetosTintaS;
                break;

            case 2:
                $qualidadeTetoQ = "Tinta Superior";
                $TetoQualidadeQ = $tetosTintaN;
                break;
        }
        $qualidadeTetoQuarto[$i + 1] = $qualidadeTetoQ;
        $TetoQualidadeQuartos[$i + 1] = $TetoQualidadeQ;

        $tpParedes = "Quarto" . ($i + 1) . "tipoparedes";

        switch ($variables[$tpParedes]) {
            case 1:
                $tpParedesQ = "Estuque";
                $ParedesTipoQ = $paredesEstuque;
                break;
            case 2:
                $tpParedesQ = "Gesso Cartonado (Pladur)";
                $ParedesTipoQ = $paredesTermica;
                break;
            case 3:
                $tpParedesQ = "Forra térmica / Acústica";
                $ParedesTipoQ = $paredesPladur;
                break;
        }
        $tipoParedesQuarto[$i + 1] = $tpParedesQ;
        $ParedesTipoQuartos[$i + 1] = $ParedesTipoQ;

        $qpParedes = "Quarto" . ($i + 1) . "qualidadeparedes";

        switch ($variables[$qpParedes]) {
            case 3:
                $qualidadeParedesQ = "Tinta plástica Superior";
                $ParedesQualidadeQ = $paredesTintaPS;
                break;
            case 2:
                $qualidadeParedesQ = "Tinta plástica";
                $ParedesQualidadeQ = $paredesTintaS;
                break;
            case 1:
                $qualidadeParedesQ = "Tinta simples";
                $ParedesQualidadeQ = $paredesTintaN;
                break;
        }
        $qualidadeParedesQuarto[$i + 1] = $qualidadeParedesQ;
        $ParedesQualidadeQuartos[$i + 1] = $ParedesQualidadeQ;

        $comprimento = "Quartoc" . ($i + 1);
        $largura = "Quartol" . ($i + 1);
        $altura = "Quartoa" . ($i + 1);

        $areaChaoQuarto[$i + 1] = $variables[$comprimento] * $variables[$largura];
        $areaChaoQuarto[0] += $areaChaoQuarto[$i + 1];

        $areaParedesQuarto[$i + 1] = ($variables[$comprimento] * $variables[$largura]) * 2 * $variables[$altura];
        $areaParedesQuarto[0] +=  $areaParedesQuarto[$i + 1];
    }
}

// WC's:
if (isset($variables["wc"])) {
    $areaChaoWc[0] = 0;
    $areaParedesWc[0] = 0;
    $custoChaoWc[0] = 0;
    $custoTetoWc[0] = 0;
    $custoParedesWc[0] = 0;
    $custoWc[0] = 0;
    for ($i = 0; $i < $variables["numerowc"]; $i++) {
        $custoWc[$i + 1] = 0;
        $tppavimentowc = "wc" . ($i + 1) . "tipopavimentos";


        if (isset($variables[$tppavimentowc])) {
            switch ($variables[$tppavimentowc]) {
                case 1:
                    $tipopavimento = "Madeira";
                    $pavimentosTipoWC = $pavimentosMadeira;
                    break;
                case 2:
                    $tipopavimento = "Flutuante";
                    $pavimentosTipoWC = $pavimentosFlutuante;
                    break;
                case 3:
                    $tipopavimento = "Vinil";
                    $pavimentosTipoWC = $pavimentosVinil;
                    break;
                case 4:
                    $tipopavimento = "Cerâmica";
                    $pavimentosTipoWC = $pavimentosCeramica;
                    break;
            }
            $tipoChaoWc[$i + 1] = $tipopavimento;
            $tipoPavimentowc[$i + 1] = $pavimentosTipoWC;
        }

        $qppavimentowc = "wc" . ($i + 1) . "qualidadepavimentos";

        if (isset($variables[$qppavimentowc])) {
            switch ($variables[$qppavimentowc]) {
                case 1:
                    $qualidadepavimento = "Média";
                    $pavimentosQualidadeWC = $pavimentosQmedia;
                    break;
                case 2:
                    $qualidadepavimento = "Média-Alta";
                    $pavimentosQualidadeWC = $pavimentosQmediaAlta;
                    break;
                case 3:
                    $qualidadepavimento = "Superior";
                    $pavimentosQualidadeWC = $pavimentosQsuperior;
                    break;
            }
            $qualidadeChaoWc[$i + 1] = $qualidadepavimento;
            $QualidadePavimentoWC[$i + 1] = $pavimentosQualidadeWC;
        }

        $tptetowc = "wc" . ($i + 1) . "tipo";

        if (isset($variables[$tptetowc])) {

            switch ($variables[$tptetowc]) {
                case 1:
                    $tipoTeto = "Estuque";
                    $TetoTipoWC = $tetosEstuque;
                    break;
                case 2:
                    $tipoTeto = "tecto falso de gesso hidrófugo";
                    $TetoTipoWC = $tetosHidro;
                    break;
                case 3:
                    $tipoTeto = "tecto falso de gesso cartonado";
                    $TetoTipoWC = $tetosCatonado;
                    break;
                case 4:
                    $tipoTeto = "isolamento térmico/acustico";
                    $TetoTipoWC = $tetosAcustico;
                    break;
            }
            $tipoTetoWc[$i + 1] = $tipoTeto;
            $TetoTipoWCs[$i + 1] = $TetoTipoWC;
        }

        $qptetowc = "wc" . ($i + 1) . "tinta";

        if (isset($variables[$qptetowc])) {

            switch ($variables[$qptetowc]) {
                case 1:
                    $qualidadeTetoWC = "Tinta Média";
                    $TetoQualidadeWC = $tetosTintaS;
                    break;

                case 2:
                    $qualidadeTetoWC = "Tinta Superior";
                    $TetoQualidadeWC = $tetosTintaN;
                    break;
            }
            $qualidadeTetoWcs[$i + 1] = $qualidadeTetoWC;
            $TetoQualidadeWCs[$i + 1] = $TetoQualidadeWC;
        }
        $tpParedeswc = "wc" . ($i + 1) . "tipoparedes";
        if (isset($variables[$tpParedeswc])) {

            switch ($variables[$tpParedeswc]) {
                case 1:
                    $tpParedeswcs = "Estuque";
                    $ParedesTipoWC = $paredesEstuque;
                    break;
                case 2:
                    $tpParedeswcs = "Gesso Cartonado (Pladur)";
                    $ParedesTipoWC = $paredesPladur;
                    break;
                case 3:
                    $tpParedeswcs = "Forra térmica / Acústica";
                    $ParedesTipoWC = $paredesTermica;
                    break;
            }
            $tipoParedesWc[$i + 1] = $tpParedeswcs;
            $ParedesTipoWCs[$i + 1] = $ParedesTipoWC;
        }

        $qpParedeswc = "wc" . ($i + 1) . "qualidadeparedes";
        if (isset($variables[$qpParedeswc])) {

            switch ($variables[$qpParedeswc]) {
                case 3:
                    $qualidadeParedes = "Tinta plástica Superior";
                    $ParedesQualidadewc = $paredesTintaPS;
                    break;
                case 2:
                    $qualidadeParedes = "Tinta plástica";
                    $ParedesQualidadewc = $paredesTintaS;
                    break;
                case 1:
                    $qualidadeParedes = "Tinta simples";
                    $ParedesQualidadewc = $paredesTintaN;
                    break;
            }
            $qualidadeParedesWc[$i + 1] = $qualidadeParedes;
            $ParedesQualidadewcs[$i + 1] = $ParedesQualidadewc;
        }

        $comprimento = "wcc" . ($i + 1);
        $largura = "wcl" . ($i + 1);
        $altura = "wca" . ($i + 1);

        $areaChaoWc[$i + 1] = $variables[$comprimento] * $variables[$largura];
        $areaChaoWc[0] += $areaChaoWc[$i + 1];

        $areaParedesWc[$i + 1] = ($variables[$comprimento] * $variables[$largura]) * 2 * $variables[$altura];
        $areaParedesWc[0] +=  $areaParedesWc[$i + 1];
    }
}

// Corredores:
if (isset($variables["circulacao"])) {
    // $circulacao = intval($_GET["circulacao"]);
    // echo $circulacao;
    // echo "<br>";
    $areaChaoCirculacao = $variables["circulacaoc"] * $variables["circulacaol"];
    $areaParedesCirculacao = ($variables["circulacaoc"] + $variables["circulacaol"]) * 2 * $variables["circulacaoa"];


    switch ($variables["Circulacaotipopavimentos"]) {
        case 1:
            $tipoChaoCirculacao = "Madeira";
            $pavimentosTipoCirculacao = $pavimentosMadeira;
            break;

        case 2:
            $tipoChaoCirculacao = "Flutuante";
            $pavimentosTipoCirculacao = $pavimentosFlutuante;
            break;

        case 3:
            $tipoChaoCirculacao = "Vinil";
            $pavimentosTipoCirculacao = $pavimentosVinil;
            break;

        case 4:
            $tipoChaoCirculacao = "Cerâmica";
            $pavimentosTipoCirculacao = $pavimentosCeramica;
            break;
    }
    switch ($variables["Circulacaoqualidadepavimentos"]) {
        case 1:
            $qualidadeChaoCirculacao = "Média";
            $pavimentosQualidadeCirculacao = $pavimentosQmedia;
            break;

        case 2:
            $qualidadeChaoCirculacao = "Média-Alta";
            $pavimentosQualidadeCirculacao = $pavimentosQmediaAlta;
            break;

        case 3:
            $qualidadeChaoCirculacao = "Superior";
            $pavimentosQualidadeCirculacao = $pavimentosQsuperior;
            break;
    }

    switch ($variables["Circulacaotipo"]) {
        case 1:
            $tipoTetoCirculacao = "Estuque";
            $TetoTipoCirculacao = $tetosEstuque;
            break;

        case 2:
            $tipoTetoCirculacao = "tecto falso de gesso hidrófugo";
            $TetoTipoCirculacao = $tetosHidro;
            break;

        case 3:
            $tipoTetoCirculacao = "tecto falso de gesso cartonado";
            $TetoTipoCirculacao = $tetosCatonado;
            break;

        case 4:
            $tipoTetoCirculacao = "isolamento térmico/acustico";
            $TetoTipoCirculacao = $tetosAcustico;
            break;
    }

    switch ($variables["Circulacaotinta"]) {
        case 1:
            $qualidadeTetoCirculacao = "Tinta Média";
            $TetoQualidadeCirculacao = $tetosTintaS;
            break;

        case 2:
            $qualidadeTetoCirculacao = "Tinta Superior";
            $TetoQualidadeCirculacao = $tetosTintaN;
            break;
    }

    switch ($variables["Circulacaotipoparedes"]) {
        case 1:
            $tipoParedesCirculacao = "Estuque";
            $ParedesTipoCirculacao = $paredesEstuque;
            break;

        case 2:
            $tipoParedesCirculacao = "Gesso Cartonado (Pladur)";
            $ParedesTipoCirculacao = $paredesPladur;
            break;

        case 3:
            $tipoParedesCirculacao = "Forra térmica / Acústica";
            $ParedesTipoCirculacao = $paredesTermica;
            break;
    }

    switch ($variables["Circulacaoqualidadeparedes"]) {
        case 3:
            $qualidadeParedesCirculacao = "Tinta plástica Superior";
            $ParedesQualidadeCirculacao = $paredesTintaPS;
            break;

        case 2:
            $qualidadeParedesCirculacao = "Tinta plástica";
            $ParedesQualidadeCirculacao = $paredesTintaS;
            break;

        case 1:
            $qualidadeParedesCirculacao = "Tinta simples";
            $ParedesQualidadeCirculacao = $paredesTintan;
            break;
    }
}

// Cozinha:
if (isset($variables["cozinha"])) {
    // $circulacao = intval($_GET["circulacao"]);
    // echo $circulacao;
    // echo "<br>";
    $areaChaocozinha = $variables["cozinhac"] * $variables["cozinhal"];
    $areaParedescozinha = ($variables["cozinhac"] + $variables["cozinhal"]) * 2 * $variables["cozinhaa"];

    switch ($variables["cozinhatipopavimentos"]) {
        case 1:
            $tipoChaocozinha = "Madeira";
            $pavimentosTipoCozinha = $pavimentosMadeira;
            break;

        case 2:
            $tipoChaocozinha = "Flutuante";
            $pavimentosTipoCozinha = $pavimentosFlutuante;
            break;

        case 3:
            $tipoChaocozinha = "Vinil";
            $pavimentosTipoCozinha = $pavimentosVinil;
            break;

        case 4:
            $tipoChaocozinha = "Cerâmica";
            $pavimentosTipoCozinha = $pavimentosCeramica;
            break;
    }
    switch ($variables["cozinhaqualidadepavimentos"]) {
        case 1:
            $qualidadeChaocozinha = "Média";
            $pavimentosQualidadecozinha = $pavimentosQmedia;
            break;

        case 2:
            $qualidadeChaocozinha = "Média-Alta";
            $pavimentosQualidadecozinha = $pavimentosQmediaAlta;
            break;

        case 3:
            $qualidadeChaocozinha = "Superior";
            $pavimentosQualidadecozinha = $pavimentosQsuperior;
            break;
    }

    switch ($variables["cozinhatipo"]) {
        case 1:
            $tipoTetocozinha = "Estuque";
            $TetoTipoCozinha = $tetosEstuque;
            break;

        case 2:
            $tipoTetocozinha = "tecto falso de gesso hidrófugo";
            $TetoTipoCozinha = $tetosHidro;
            break;

        case 3:
            $tipoTetocozinha = "tecto falso de gesso cartonado";
            $TetoTipoCozinha = $tetosCatonado;
            break;

        case 4:
            $tipoTetocozinha = "isolamento térmico/acustico";
            $TetoTipoCozinha = $tetosAcustico;
            break;
    }

    switch ($variables["cozinhatinta"]) {
        case 1:
            $qualidadeTetocozinha = "Tinta Média";
            $TetoQualidadeCozinha = $tetosTintaN;
            break;

        case 2:
            $qualidadeTetocozinha = "Tinta Superior";
            $TetoQualidadeCozinha = $tetosTintaS;
            break;
    }

    switch ($variables["cozinhatipoparedes"]) {
        case 1:
            $tipoParedescozinha = "Estuque";
            $ParedesTipoCozinha = $paredesEstuque;
            break;

        case 2:
            $tipoParedescozinha = "Gesso Cartonado (Pladur)";
            $ParedesTipoCozinha = $paredesEstuque;
            break;

        case 3:
            $tipoParedescozinha = "Forra térmica / Acústica";
            $ParedesTipoCozinha = $paredesEstuque;
            break;
    }

    switch ($variables["cozinhaqualidadeparedes"]) {
        case 3:
            $qualidadeParedescozinha = "Tinta plástica Superior";
            $ParedesQualidadeCozinha = $paredesTintaPS;
            break;

        case 2:
            $qualidadeParedescozinha = "Tinta plástica";
            $ParedesQualidadeCozinha = $paredesTintaS;
            break;

        case 1:
            $qualidadeParedescozinha = "Tinta simples";
            $ParedesQualidadeCozinha = $paredesTintaN;
            break;
    }

    if (isset($variables["MobInf"]) && isset($variables["mobinf"])) {

        $metrosMoveisInferiores = intval($variables["MobInf"]);

        switch (($variables["mobinf"])) {
            case 3:
                $bancadaInferior = "Superior";
                $valorMoveisInferioresm2 = $valorMoveisInferioresSupm2 * $metrosMoveisInferiores;
                break;
            case 2:
                $bancadaInferior = "Média Alta";
                $valorMoveisInferioresm2 = $valorMoveisInferioresMALm2 * $metrosMoveisInferiores;
                break;
            case 1:
                $bancadaInferior = "Média";
                $valorMoveisInferioresm2 = $valorMoveisInferioresMEDm2 * $metrosMoveisInferiores;
                break;
        }
    }
    if (isset($variables["bancada"]) && isset($variables["bancadaq"])) {

        $metrosMoveisInferiores = intval($variables["MobInf"]);

        switch (($variables["bancada"])) {
            case 3:
                $bancada = "Cerâmica";
                $valorBancadam2a = $valorBancadaCeramicam2;
                break;
            case 2:
                $bancada = "Pedra";
                $valorBancadam2a = $valorBancadaPedram2;
                break;
            case 1:
                $bancada = "Outros";
                $valorBancadam2a = $valorBancadaOutrom2;
                break;
        }
        switch (($variables["bancadaq"])) {
            case 3:
                $bancadaQualidade = "Superior";
                $valorBancadam2 = $valorBancadam2a * $valorBancadaSupm2;
                break;
            case 2:
                $bancadaQualidade = "Média Alta";
                $valorBancadam2 = $valorBancadam2a * $valorBancadaMALm2;
                break;
            case 1:
                $bancadaQualidade = "Média";
                $valorBancadam2 = $valorBancadam2a * $valorBancadaMedm2;
                break;
        }
    }
    if (isset($variables["MobSup"]) && isset($variables["mobsup"])) {

        $metrosMoveisSuperiores = intval($variables["MobSup"]);

        switch (($variables["mobsup"])) {
            case 3:
                $bancadaSuperior = "Superior";
                $valorMoveisSuperioresm2 = $valorMoveisSuperioresSupm2 * $metrosMoveisSuperiores;
                break;
            case 2:
                $bancadaSuperior = "Média Alta";
                $valorMoveisSuperioresm2 = $valorMoveisSuperioresMALm2 * $metrosMoveisSuperiores;
                break;
            case 1:
                $bancadaSuperior = "Média";
                $valorMoveisSuperioresm2 = $valorMoveisSuperioresMedm2 * $metrosMoveisSuperiores;
                break;
        }
    }
}

// Portas:
if (isset($variables["portas"])) {
    $custoportas = 0;
    $custoportasint = 0;
    $custoportasext = 0;
    if (isset($variables["portasint"]) && $variables["portasint"] > 0) {
        switch ($variables["portasinteriores"]) {
            case 1:
                $tipoPortaInteriores = "Portas interiores novas em Madeira";
                $valorPortasInteriores = $valorPIntMadeira;
                break;
            case 2:
                $tipoPortaInteriores = "Portas interiores novas lacadas";
                $valorPortasInteriores = $valorPIntLacadas;
                break;
            case 3:
                $tipoPortaInteriores = "Portas interiores restauradas";
                $valorPortasInteriores = $valorPIntRestauradas;
                break;
        }
    }
    if (isset($variables["portasext"]) && $variables["portasext"] > 0) {
        switch ($variables["portasexteriores"]) {
            case 1:
                $tipoPortaExteriores = "Portas blindadas qualidade superior";
                $valorPortasExteriores = $valorPExtBQS;
                break;
            case 2:
                $tipoPortaExteriores = "Portas blindadas qualidade média alta";
                $valorPortasExteriores = $valorPExtBQM;
                break;
            case 3:
                $tipoPortaExteriores = "Portas blindadas qualidade média";
                $valorPortasExteriores = $valorPExtBQm;
                break;
            case 4:
                $tipoPortaExteriores = "Portas exteriores restauradas";
                $valorPortasExteriores = $valorPExtRest;
                break;
        }
    }
}

// Roupeiros:
if (isset($variables["roupeiros"]) && isset($variables["nroupeiros"])) {
    $areaRoupeiro[0] = 0;
    $custoRoupeiro[0] = 0;
    for ($i = 0; $i < $variables["nroupeiros"]; $i++) {
        $custoRoupeiro[$i + 1] = 0;

        $comprimento = "comprimentoroupeiro" . ($i + 1);
        $largura = "larguraroupeiro" . ($i + 1);

        $tpRoupeiros = "tiporoupeiro" . ($i + 1);

        switch ($variables[$tpRoupeiros]) {
            case 4:
                $tpRoupeiro = "Novo - Qualidade Superior";
                $valorRoupeiro=$roupeirosSup*$roupeirosNovo;
                break;
            case 3:
                $tpRoupeiro = "Novo - Qualidade média-Alta";
                $valorRoupeiro=$roupeirosMA*$roupeirosNovo;
                break;
            case 2:
                $tpRoupeiro = "Restaurar";
                $valorRoupeiro=$roupeirosRecuperar;
                break;
            case 1:
                $tpRoupeiro = "Novo - Qualidade média";
                $valorRoupeiro=$roupeirosM*$roupeirosNovo;
                break;
        }

        $areaRoupeiro[$i + 1] = $variables[$comprimento] * $variables[$largura];
        $areaRoupeiro[0] += $areaRoupeiro[$i + 1];
        $custoRoupeiro[$i + 1] = $areaRoupeiro[$i + 1] * $valorRoupeiro;

        
        $tipoRoupeiro[$i + 1] = $tpRoupeiro;
    }
}

// Janelas:
if (isset($variables["janelas"]) && isset($variables["njanelas"])) {
    $areajanelas[0] = 0;
    $custojanelas[0] = 0;

    switch ($variables["tipojanela"]) {
        case 1:
            $janela = "Madeira";
            $tipoJanela= $janelasMad;
            break;
        case 2:
            $janela = "Aluminio";
            $tipoJanela= $janelasAlu;
            break;
        case 3:
            $janela = "PVC";
            $tipoJanela= $janelasPVC;
            break;
    }

    switch ($variables["qualidadejanelas"]) {
        case 1:
            $qualidadejanela = "Média";
            $qualidadeJanela= $janelasM;
            break;
        case 2:
            $qualidadejanela = "Média-Alta";
            $qualidadeJanela= $janelasMA;
            break;
        case 3:
            $qualidadejanela = "Superior";
            $qualidadeJanela= $janelasSup;
            break;
    }

    switch ($variables["corjanelas"]) {
        case 1:
            $corjanela = "Branco";
            $CorJanela= $janelasBra;
            break;
        case 2:
            $corjanela = "Outra";
            $CorJanela= $janelasOutra;
            break;
        case 3:
            $corjanela = "Duas Cores";
            $CorJanela= $janelasDC;
            break;
    }

    for ($i = 0; $i < $variables["njanelas"]; $i++) {
        $custojanelas[$i + 1] = 0;

        $comprimento = "comprimentojanelas" . ($i + 1);
        $largura = "largurajanelas" . ($i + 1);

        $tpjanelas = "tipojanelas" . ($i + 1);

        switch ($variables[$tpjanelas]) {
            case 2:
                $tpjanela = "Correr";
                $FormaJanela=$janelasCorrer;
                break;
            case 1:
                $tpjanela = "Oscilobatentes";
                $FormaJanela=$janelasOsc;
                break;
        }

        $areajanelas[$i + 1] = $variables[$comprimento] * $variables[$largura];
        $areajanelas[0] += $areajanelas[$i + 1];

        $custojanelas[$i + 1] = $areajanelas[$i + 1] * $tipoJanela * $qualidadeJanela * $CorJanela * $FormaJanela;

        
        $tipojanelas[$i + 1] = $tpjanela;
    }
}
