<?php
require_once("backoffice.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- https://fontawesome.com/icons/ -->
    <link rel="stylesheet" href="simulador.css">
    <!-- <script src="main.js"></script> -->
    <script src="funcoes.js"></script>
</head>

<body>
    <header>
        <h1>RESULTADOS</h1>
    </header>
    <main>
        <div class="container border">
            <?php if (isset($variables["salaestar"])) : ?>
                <div class="row sala border">
                    <div class="col-12">
                        <h1>SALA</h1>
                        <h4>Descrição:</h4>
                        <div class="col-12">

                            <?php if (isset(($variables["Salaopcaopavimentos"]))) : ?>

                                <h3><?= $variables["Salaopcaopavimentos"] = 1 ? "Renovar Chão" : "Aplicar novo Chão"; ?></h3>
                                <p>Area de chão: <?= $areaChaoSala; ?> m<sup>2</sup></p>
                                <p>Tipo de chão: <?= $tipoChaoSala; ?></p>
                                <p>Qualidade: <?= $qualidadeChaoSala; ?></p>
                                <?php $custoSala += (($areaChaoSala) * ($variables["Salaopcaopavimentos"] = 1 ? $valorChaom2Renovar : $valorChaom2Novo) * ($pavimentosTipoSala) * ($pavimentosQualidadeSala)); ?>
                            <?php endif; ?>

                            <?php if (isset(($variables["Salaopcao"]))) : ?>
                                <h3><?= $variables["Salaopcao"] = 1 ? "Renovar Teto" : "Aplicar novo Teto"; ?></h3>
                                <p>Area de teto: <?= $areaChaoSala; ?> m<sup>2</sup></p>
                                <p>Tipo de teto: <?= $tipoTetoSala; ?></p>
                                <p>Qualidade: <?= $qualidadeTetoSala; ?></p>
                                <?php $custoSala += (($areaChaoSala) * ($variables["Salaopcao"] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoSala) * ($TetoQualidadeSala)); ?>
                            <?php endif; ?>

                            <?php if (isset(($variables["Salaopcaoparedes"]))) : ?>
                                <h3><?= intval($variables["Salaopcaoparedes"]) == 1 ? "Renovar Paredes" : "Construir Paredes"; ?></h3>
                                <p>Area de paredes: <?= $areaParedesSala; ?> m<sup>2</sup></p>
                                <p>Tipo de paredes: <?= $tipoParedesSala; ?></p>
                                <p>Qualidade: <?= $qualidadeParedesSala; ?></p>
                                <?php $custoSala += (($areaParedesSala) * ($variables["Salaopcaoparedes"] = 1 ? $valorParedesm2Renovar : $valorParedesm2Novo) * ($ParedesTipoSala) * ($ParedesQualidadeSala)); ?>
                            <?php endif; ?>

                            <?php if (!isset(($variables["Salaopcaoparedes"])) && !isset(($variables["Salaopcao"])) && !isset(($variables["Salaopcaopavimentos"]))) : ?>
                                <h6>(Sem dados a mostrar)</h6>
                            <?php endif; ?>
                            <?= number_format($custoSala, 2, ',', '.'); ?><?= ' €' ?>

                            <?php $custoRenovacao += $custoSala; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["circulacao"])) : ?>
                <div class="row circulacao border">
                    <div class="col-12">
                        <h1>Circulacao</h1>
                        <h4>Descrição:</h4>
                        <div class="col-12">
                            <?php if (isset($variables["Circulacaoopcaopavimentos"])) : ?>
                                <h3><?= intval($variables["Circulacaoopcaopavimentos"]) == 1 ? "Renovar Chão" : "Aplicar novo Chão"; ?></h3>
                                <p>Area de chão: <?= $areaChaoCirculacao; ?> m<sup>2</sup></p>
                                <p>Tipo de chão: <?= $tipoChaoCirculacao; ?></p>
                                <p>Qualidade: <?= $qualidadeChaoCirculacao; ?></p>
                                <?php $custoCirculacao += (($areaChaoCirculacao) * ($variables["Circulacaoopcaopavimentos"] = 1 ? $valorChaom2Renovar : $valorChaom2Novo) * ($pavimentosTipoCirculacao) * ($pavimentosQualidadeCirculacao)); ?>

                            <?php endif; ?>
                            <?php if (isset($variables["Circulacaoopcao"])) : ?>
                                <h3><?= $variables["Circulacaoopcao"] == 1 ? "Renovar Teto" : "Aplicar novo Teto"; ?></h3>
                                <p>Area de teto: <?= $areaChaoCirculacao; ?> m<sup>2</sup></p>
                                <p>Tipo de teto: <?= $tipoTetoCirculacao; ?></p>
                                <p>Qualidade: <?= $qualidadeTetoCirculacao; ?></p>
                                <?php $custoCirculacao += (($areaChaoCirculacao) * ($variables["Circulacaoopcaoparedes"] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoCirculacao) * ($TetoQualidadeCirculacao)); ?>

                            <?php endif; ?>
                            <?php if (isset($variables["Circulacaoopcaoparedes"])) : ?>
                                <h3><?= $variables["Circulacaoopcaoparedes"] = 1 ? "Renovar Paredes" : "Construir Paredes"; ?></h3>
                                <p>Area de paredes: <?= $areaParedesCirculacao; ?> m<sup>2</sup></p>
                                <p>Tipo de paredes: <?= $tipoParedesCirculacao; ?></p>
                                <p>Qualidade: <?= $qualidadeParedesCirculacao; ?></p>
                                <?php $custoCirculacao += (($areaParedesCirculacao) * ($variables["Circulacaoopcaoparedes"] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoCirculacao) * ($TetoQualidadeCirculacao)); ?>
                            <?php endif; ?>
                            <?php if (!isset(($variables["Circulacaoopcaoparedes"])) && !isset(($variables["Circulacaoopcao"])) && !isset(($variables["Circulacaoopcaopavimentos"]))) : ?>
                                <h6>(Sem dados a mostrar)</h6>
                            <?php endif; ?>
                            <!-- <?= $custoCirculacao; ?> -->
                            <?= number_format($custoCirculacao, 2, ',', '.'); ?><?= ' €' ?>
                        </div>
                        <?php $custoRenovacao += $custoCirculacao; ?>

                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["cozinha"])) : ?>
                <div class="row cozinha border">
                    <div class="col-12">
                        <h1>cozinha</h1>
                        <h4>Descrição:</h4>
                        <?php if (isset($variables["cozinhatipopavimentos"]) || isset($variables["cozinhaqualidadepavimentos"]) || isset($variables["cozinhatipo"]) || isset($variables["cozinhatinta"]) || isset($variables["cozinhatipoparedes"]) || isset($variables["cozinhaqualidadeparedes"])) : ?>
                            <div class="col-12">
                                <?php if (isset($variables["cozinhaopcaopavimentos"])) : ?>
                                    <h3><?= intval($variables["cozinhaopcaopavimentos"]) == 1 ? "Renovar Chão" : "Aplicar novo Chão"; ?></h3>
                                    <p>Area de chão: <?= $areaChaocozinha; ?> m<sup>2</sup></p>
                                    <p>Tipo de chão: <?= $tipoChaocozinha; ?></p>
                                    <p>Qualidade: <?= $qualidadeChaocozinha; ?></p>
                                    <?php $custocozinha += (($areaChaocozinha) * ($variables["cozinhaopcaopavimentos"] = 1 ? $valorChaom2Renovar : $valorChaom2Novo) * ($pavimentosTipoCozinha) * ($pavimentosQualidadecozinha)); ?>

                                <?php endif; ?>
                                <?php if (isset($variables["cozinhaopcao"])) : ?>
                                    <h3><?= $variables["cozinhaopcao"] == 1 ? "Renovar Teto" : "Aplicar novo Teto"; ?></h3>
                                    <p>Area de teto: <?= $areaChaocozinha; ?> m<sup>2</sup></p>
                                    <p>Tipo de teto: <?= $tipoTetocozinha; ?></p>
                                    <p>Qualidade: <?= $qualidadeTetocozinha; ?></p>
                                    <?php $custocozinha += (($areaChaocozinha) * ($variables["cozinhaopcao"] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoCozinha) * ($TetoQualidadeCozinha)); ?>
                                <?php endif; ?>
                                <?php if (isset($variables["cozinhaopcaoparedes"])) : ?>
                                    <h3><?= $variables["cozinhaopcaoparedes"] = 1 ? "Renovar Paredes" : "Construir Paredes"; ?></h3>
                                    <p>Area de paredes: <?= $areaParedescozinha; ?> m<sup>2</sup></p>
                                    <p>Tipo de paredes: <?= $tipoParedescozinha; ?></p>
                                    <p>Qualidade: <?= $qualidadeParedescozinha; ?></p>
                                    <?php $custocozinha += (($areaParedescozinha) * ($variables["cozinhaopcaoparedes"] = 1 ? $valorParedesm2Renovar : $valorParedesm2Novo) * ($ParedesTipoCozinha) * ($ParedesQualidadeCozinha)); ?>
                                <?php endif; ?>
                                <?php if (!isset(($variables["cozinhaopcaoparedes"])) && !isset(($variables["cozinhaopcao"])) && !isset(($variables["cozinhaopcaopavimentos"]))) : ?>
                                    <h6>(Sem dados a mostrar)</h6>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($variables["MobInf"]) || isset($variables["mobinf"]) || isset($variables["MobSup"]) || isset($variables["mobsup"]) || isset($variables["bancada"]) || isset($variables["bancadaq"])) : ?>
                            <!-- <h1>mobiliario!!</h1> -->
                            <?php if (isset($variables["MobInf"]) && isset($variables["mobinf"])) : ?>
                                <h3>Mobiliário inferior:</h3>
                                <ul>
                                    <li>Metros lineares de móveis: <?= $variables["MobInf"]; ?> m<sup>2</sup>
                                        <ul>
                                            <li>Qualidade: <?= $bancadaInferior ?></li>
                                        </ul>
                                    </li>
                                    <?php $custocozinha += $valorMoveisInferioresm2; ?>

                                    <?php if (isset($variables["bancada"]) && isset($variables["bancadaq"])) : ?>
                                        <li>Metros lineares de bancada: <?= $variables["MobInf"]; ?> m<sup>2</sup>
                                            <ul>
                                                <li>Material: <?= $bancada ?></li>
                                                <li>Qualidade: <?= $bancadaQualidade ?></li>
                                            </ul>
                                        </li>
                                        <?php $custocozinha += $valorBancadam2; ?>

                                    <?php endif; ?>
                                </ul>

                            <?php endif; ?>
                            <?php if (isset($variables["MobSup"]) && isset($variables["mobsup"])) : ?>
                                <h3>Mobiliário Superior:</h3>
                                <ul>
                                    <li>Metros lineares de móveis: <?= $variables["MobSup"]; ?> m<sup>2</sup>
                                        <ul>
                                            <li>Qualidade: <?= $bancadaSuperior ?></li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php $custocozinha += $valorMoveisSuperioresm2 ?>

                            <?php endif; ?>

                        <?php endif; ?>
                        <?php if (isset($variables["Frigorifico"]) || isset($variables["Combinado"]) || isset($variables["Congelador"]) || isset($variables["Forno"]) || isset($variables["Placa"]) || isset($variables["Microondas"]) || isset($variables["Exaustor"]) || isset($variables["lavar"]) || isset($variables["roupa"])) : ?>

                            <ul>
                                <?php if (isset($variables["Frigorifico"])) : ?>
                                    <li>Frigorifico: <?= $variables["Frigorifico"] ?></li>
                                    <?php $custocozinha += $valorFrigorifico; ?>
                                <?php endif; ?>
                                <?php if (isset($variables["Combinado"])) : ?>
                                    <li>Combinado: <?= $variables["Combinado"] ?></li>
                                    <?php $custocozinha += $valorCombinado; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Congelador"])) : ?>
                                    <li>Congelador: <?= $variables["Congelador"] ?></li>
                                    <?php $custocozinha += $valorCongelador; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Forno"])) : ?>
                                    <li>Forno: <?= $variables["Forno"] ?></li>
                                    <?php $custocozinha += $valorForno; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Placa"])) : ?>
                                    <li>Placa: <?= $variables["Placa"] ?></li>
                                    <?php $custocozinha += $valorPlaca; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Microondas"])) : ?>
                                    <li>Microondas: <?= $variables["Microondas"] ?></li>
                                    <?php $custocozinha += $valorMicroondas; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Exaustor"])) : ?>
                                    <li>Exaustor: <?= $variables["Exaustor"] ?></li>
                                    <?php $custocozinha += $valorExaustor; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["lavar"])) : ?>
                                    <li>lavar: <?= $variables["lavar"] ?></li>
                                    <?php $custocozinha += $valorLavar; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["roupa"])) : ?>
                                    <li>roupa: <?= $variables["roupa"] ?></li>
                                    <?php $custocozinha += $valorRoupa; ?>

                                <?php endif; ?>
                            </ul>

                        <?php endif; ?>
                        <!-- <?= $custocozinha; ?> -->
                        <?= number_format($custocozinha, 2, ',', '.'); ?><?= ' €' ?>
                        <?php $custoRenovacao += $custocozinha; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["quartos"])) : ?>
                <?php for ($i = 0; $i < $variables["numquartos"]; $i++) : ?>
                    <div class="row quartos border">
                        <div class="col-12">
                            <h1>Quarto<?= $i + 1; ?></h1>
                            <h4>Descrição:</h4>
                            <div class="col-12">

                                <?php $variavel1 = "Quarto" . ($i + 1) . "opcaopavimentos"; ?>
                                <?php if (isset($variables[$variavel1])) : ?>
                                    <h3><?= intval($variables[$variavel1]) == 1 ? "Renovar Chão" : "Aplicar novo Chão"; ?></h3>
                                    <p>Area de chão: <?= $areaChaoQuarto[$i + 1]; ?> m<sup>2</sup></p>
                                    <p>Tipo de chão: <?= $tipoChaoQuarto[$i + 1]; ?></p>
                                    <p>Qualidade: <?= $qualidadeChaoQuarto[$i + 1]; ?></p>
                                    <?php $custoChaoQuarto[$i + 1] = (($areaChaoQuarto[$i + 1]) * ($variables[$variavel1] = 1 ? $valorChaom2Renovar : $valorChaom2Novo) * ($tipoPavimentoQuarto[$i + 1]) * ($QualidadePavimentoQuarto[$i + 1])); ?>

                                    <?php $custoQuarto[$i + 1] += $custoChaoQuarto[$i + 1]; ?>
                                <?php endif; ?>

                                <?php $variavel2 = "Quarto" . ($i + 1) . "opcao"; ?>
                                <?php if (isset($variables[$variavel2])) : ?>
                                    <h3><?= intval($variables[$variavel2]) == 1 ? "Renovar Teto" : "Aplicar novo Teto"; ?></h3>
                                    <p>Area de Teto: <?= $areaChaoQuarto[$i + 1]; ?> m<sup>2</sup></p>
                                    <p>Tipo de Teto: <?= $tipoTetoQuarto[$i + 1]; ?></p>
                                    <p>Qualidade: <?= $qualidadeTetoQuarto[$i + 1]; ?></p>
                                    <?php $custoTetoQuarto[$i + 1] = (($areaChaoQuarto[$i + 1]) * ($variables[$variavel2] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoQuartos[$i + 1]) * ($TetoQualidadeQuartos[$i + 1])); ?>

                                    <?php $custoQuarto[$i + 1] += $custoTetoQuarto[$i + 1]; ?>

                                <?php endif; ?>

                                <?php $variavel3 = "Quarto" . ($i + 1) . "opcaoparedes"; ?>
                                <?php if (isset($variables[$variavel3])) : ?>
                                    <h3><?= intval($variables[$variavel3]) == 1 ? "Renovar Paredes" : "Construir Paredes"; ?></h3>
                                    <p>Area de paredes: <?= $areaParedesQuarto[$i + 1]; ?> m<sup>2</sup></p>
                                    <p>Tipo de paredes: <?= $tipoParedesQuarto[$i + 1]; ?></p>
                                    <p>Qualidade: <?= $qualidadeParedesQuarto[$i + 1]; ?></p>
                                    <?php $custoParedesQuarto[$i + 1] = (($areaParedesQuarto[$i + 1]) * ($variables[$variavel3] = 1 ? $valorParedesm2Renovar : $valorParedesm2Novo) * ($ParedesTipoQuartos[$i + 1]) * ($ParedesQualidadeQuartos[$i + 1])); ?>
                                    <?php $custoQuarto[$i + 1] += $custoParedesQuarto[$i + 1]; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- <?= $custoQuarto[$i + 1]; ?> -->
                    <?php $custoQuarto[0] += $custoQuarto[$i + 1]; ?>
                <?php endfor; ?>
                <!-- <?= $custoQuarto[0]; ?> -->
                <?= number_format($custoQuarto[0], 2, ',', '.'); ?><?= ' €' ?>
                <?php $custoRenovacao += $custoQuarto[0]; ?>

            <?php endif; ?>

            <?php if (isset($variables["wc"])) : ?>
                <div class="row Wcs border">
                    <div class="col-12">
                        <h4>Descrição:</h4>
                        <?php if (isset($variables[$qpParedeswc]) || isset($variables[$tpParedeswc]) || isset($variables[$qptetowc]) || isset($variables[$tptetowc]) || isset($variables[$qppavimentowc]) || isset($variables[$tppavimentowc])) : ?>

                            <?php for ($i = 0; $i < $variables["numerowc"]; $i++) : ?>

                                <h1>Wc<?= $i + 1; ?></h1>

                                <div class="col-12">

                                    <?php $variavel1 = "wc" . ($i + 1) . "opcaopavimentos"; ?>
                                    <?php if (isset($variables[$variavel1])) : ?>
                                        <h3><?= intval($variables[$variavel1]) == 1 ? "Renovar Chão" : "Aplicar novo Chão"; ?></h3>
                                        <p>Area de chão: <?= $areaChaoWc[$i + 1]; ?> m<sup>2</sup></p>
                                        <p>Tipo de chão: <?= $tipoChaoWc[$i + 1]; ?></p>
                                        <p>Qualidade: <?= $qualidadeChaoWc[$i + 1]; ?></p>
                                        <?php $custoChaoWc[$i + 1] = (($areaChaoWc[$i + 1]) * ($variables[$variavel1] = 1 ? $valorChaom2Renovar : $valorChaom2Novo) * ($tipoPavimentowc[$i + 1]) * ($QualidadePavimentoWC[$i + 1])); ?>
                                        <?php $custoWc[$i + 1] += $custoChaoWc[$i + 1]; ?>
                                    <?php endif; ?>

                                    <?php $variavel2 = "wc" . ($i + 1) . "opcao"; ?>
                                    <?php if (isset($variables[$variavel2])) : ?>
                                        <h3><?= intval($variables[$variavel2]) == 1 ? "Renovar Teto" : "Aplicar novo Teto"; ?></h3>
                                        <p>Area de Teto: <?= $areaChaoWc[$i + 1]; ?> m<sup>2</sup></p>
                                        <p>Tipo de Teto: <?= $tipoTetoWc[$i + 1]; ?></p>
                                        <p>Qualidade: <?= $qualidadeTetoWcs[$i + 1]; ?></p>
                                        <?php $custoTetoWc[$i + 1] = (($areaChaoWc[$i + 1]) * 
                                        ($variables[$variavel2] = 1 ? $valorTetom2Renovar : $valorTetom2Novo) * ($TetoTipoWCs[$i + 1]) * ($TetoQualidadeWCs[$i + 1])); ?>
                                        <?php $custoWc[$i + 1] += $custoTetoWc[$i + 1]; ?>

                                    <?php endif; ?>

                                    <?php $variavel3 = "wc" . ($i + 1) . "opcaoparedes"; ?>
                                    <?php if (isset($variables[$variavel3])) : ?>
                                        <h3><?= intval($variables[$variavel1]) == 1 ? "Renovar Paredes" : "Construir Paredes"; ?></h3>
                                        <p>Area de Paredes: <?= $areaParedesWc[$i + 1]; ?> m<sup>2</sup></p>
                                        <p>Tipo de Paredes: <?= $tipoParedesWc[$i + 1]; ?></p>
                                        <p>Qualidade: <?= $qualidadeParedesWc[$i + 1]; ?></p>
                                        <?php $custoParedesWc[$i + 1] = (($areaParedesWc[$i + 1]) * ($variables[$variavel3] = 1 ? $valorParedesm2Renovar : $valorParedesm2Novo) * ($ParedesTipoWCs[$i + 1]) * ($ParedesQualidadewcs[$i + 1])); ?>
                                        <?php $custoWc[$i + 1] += $custoParedesWc[$i + 1]; ?>
                                    <?php endif; ?>
                                </div>
                                <?php if (($custoWc[$i + 1]) > 0) : ?>
                                    <!-- <?= $custoWc[$i + 1]; ?> -->
                                    <?php $custoWc[0] += $custoWc[$i + 1]; ?>
                                <?php endif; ?>
                            <?php endfor; ?>

                        <?php endif; ?>

                        <?php if (isset($variables["sanita"]) || isset($variables["Bide"]) || isset($variables["Duche"]) || isset($variables["Banheira"]) || isset($variables["Lavatorio"]) || isset($variables["Mobiliario"])) : ?>

                            <ul>
                                <?php if (isset($variables["sanita"]) && $variables["sanita"] > 0) : ?>
                                    <li>Sanitas: <?= $variables["sanita"] ?></li>
                                    <?php $custoWc[0] += $valorSanitas; ?>
                                <?php endif; ?>
                                <?php if (isset($variables["Bide"]) && $variables["Bide"] > 0) : ?>
                                    <li>Bide: <?= $variables["Bide"] ?></li>
                                    <?php $custoWc[0] += $valorBide; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Duche"]) && $variables["Duche"] > 0) : ?>
                                    <li>Duche: <?= $variables["Duche"] ?></li>
                                    <?php $custoWc[0] += $valorDuche; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Banheira"]) && $variables["Banheira"] > 0) : ?>
                                    <li>Banheira: <?= $variables["Banheira"] ?></li>
                                    <?php $custoWc[0] += $valorBanheira; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Lavatorio"]) && $variables["Lavatorio"] > 0) : ?>
                                    <li>Lavatorio: <?= $variables["Lavatorio"] ?></li>
                                    <?php $custoWc[0] += $valorLavatorio; ?>

                                <?php endif; ?>
                                <?php if (isset($variables["Mobiliario"]) && $variables["Mobiliario"] > 0) : ?>
                                    <li>Mobiliario: <?= $variables["Mobiliario"] ?></li>
                                    <?php $custoWc[0] += $valorMobiliario; ?>

                                <?php endif; ?>
                            </ul>

                        <?php endif; ?>

                        <?php if (($custoWc[0]) > 0) : ?>
                            <!-- <?= $custoWc[0]; ?> -->
                            <?= number_format($custoWc[0], 2, ',', '.'); ?><?= ' €' ?>
                            <?php $custoRenovacao += $custoWc[0]; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["portas"])) : ?>
                <div class="row portas border">
                    <div class="col-12">
                        <h1>Portas</h1>
                        <div class="col-12">
                            <?php if (isset($variables["portasint"]) &&  $variables["portasint"] > 0) : ?>
                                <h3>
                                    <?= $variables["portasint"] ?> -
                                    <?= $tipoPortaInteriores; ?>
                                </h3>
                                <?php $custoportas += $variables["portasinteriores"] * $valorPortasInteriores; ?>
                            <?php endif; ?>

                            <?php if (isset($variables["portasext"]) &&  $variables["portasext"] > 0) : ?>
                                <h3>
                                    <?= $variables["portasext"] ?> - 
                                    <?= $tipoPortaExteriores; ?>
                                </h3>
                                <?php $custoportas += $variables["portasexteriores"] * $valorPortasExteriores; ?>
                            <?php endif; ?>
                            <!-- <?= $custoportas; ?> -->
                            <?= number_format($custoportas, 2, ',', '.'); ?><?= ' €' ?>
                            <?php $custoRenovacao += $custoportas; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["roupeiros"]) && isset($variables["nroupeiros"])) : ?>
                <div class="row roupeiros border">
                    <div class="col-12">
                        <h1>Roupeiros</h1>
                        <div class="col-12">
                            <?php for ($i = 0; $i < $variables["nroupeiros"]; $i++) : ?>
                                <h5>
                                    <?= $i + 1 ?> -
                                    <?= $areaRoupeiro[$i + 1] ?>
                                    m<sup>2</sup> -
                                    <?= $tipoRoupeiro[$i + 1] ?>
                                </h5>
                                <?php $areaRoupeiro[0] += $areaRoupeiro[$i + 1]; ?>
                                <?php $custoRoupeiro[0] += $custoRoupeiro[$i + 1]; ?>
                            <?php endfor; ?>
                            <!-- <?= $custoRoupeiro[0]; ?> -->
                            <?= number_format($custoRoupeiro[0], 2, ',', '.'); ?><?= ' €' ?>
                            <?php $custoRenovacao += $custoRoupeiro[0]; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["janelas"]) && isset($variables["njanelas"])) : ?>
                <div class="row janelas border">
                    <div class="col-12">
                        <h1>janelas</h1>
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <th></th>
                                    <th>Tipo</th>
                                    <th>Tamanho</th>
                                    <th>Material</th>
                                    <th>Qualidade</th>
                                    <th>Cor</th>
                                </thead>
                                <tbody>

                                    <?php for ($i = 0; $i < $variables["njanelas"]; $i++) : ?>


                                        <tr>
                                            <td><?= $i + 1 ?> </td>
                                            <td>
                                                <?= $tipojanelas[$i + 1] ?>
                                            </td>
                                            <td>
                                            <?= $areajanelas[$i + 1] ?>
                                                m<sup>2</sup> 
                                            </td>
                                            <td>
                                                <?= $janela ?>
                                            </td>
                                            <td>
                                                <?= $qualidadejanela ?>
                                            </td>
                                            <td>
                                                <?= $corjanela ?>
                                            </td>

                                        </tr>

                                        </h5>
                                        <?php $areajanelas[0] += $areajanelas[$i + 1]; ?>
                                        <?php $custojanelas[0] += $custojanelas[$i + 1]; ?>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                            <!-- <?= $custojanelas[0]; ?> -->
                            <?= number_format($custojanelas[0], 2, ',', '.'); ?><?= ' €' ?>
                            <?php $custoRenovacao += $custojanelas[0]; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($variables["aparelhagem"]) || isset($variables["aguas"]) || isset($variables["esgotos"]) || isset($variables["gas"]) || isset($variables["clima"])) : ?>

                <div class="row border extras">
                    <div class="col-12">
                        <h1>Serviços sob cotação:</h1>
                        <ul>
                            <?php if (isset($variables["aparelhagem"])) : ?>
                                <?php
                                switch ($variables["aparelhagem"]) {
                                    case 1:
                                        echo "<li>Instalar aparelhagem de gama média</li>";
                                        break;
                                    case 2:
                                        echo "<li>Instalar aparelhagem de gama média-alta</li>";
                                        break;
                                    case 3:
                                        echo "<li>Instalar aparelhagem de gama Superior</li>";
                                        break;
                                };
                                ?>
                            <?php endif; ?>
                            <?php if (isset($variables["aguas"])) : ?>
                                <?php
                                switch ($variables["aguas"]) {
                                    case 1:
                                        echo "<li>Instalar sistema de aquecimento de águas solar</li>";
                                        break;
                                    case 2:
                                        echo "<li>Instalar termoacumulador eletrico</li>";
                                        break;
                                    case 3:
                                        echo "<li>Instalar esquentador</li>";
                                        break;
                                };
                                ?>
                            <?php endif; ?>
                            <?php if (isset($variables["esgotos"])) : ?>
                                <?php
                                switch ($variables["esgotos"]) {
                                    case 3:
                                        echo "<li>Instalar tubagem de esgoto</li>";
                                        break;
                                };
                                ?>
                            <?php endif; ?>
                            <?php if (isset($variables["gas"])) : ?>
                                <?php
                                switch ($variables["gas"]) {
                                    case 3:
                                        echo "<li>Instalar tubagem de gas</li>";
                                        break;
                                };
                                ?>
                            <?php endif; ?>
                            <?php if (isset($variables["clima"])) : ?>
                                <?php
                                switch ($variables["clima"]) {
                                    case 1:
                                        echo "<li>Instalar piso radiante</li>";
                                        break;
                                    case 2:
                                        echo "<li>Instalar tubagem de aquecimento central</li>";
                                        break;
                                    case 3:
                                        echo "<li>Instalar sistema de Ar Condicionado</li>";
                                        break;
                                };
                                ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </main>
    <footer class="container border">
        <h2>
            <!-- FIMMM!!! -->
            <?= number_format($custoRenovacao, 2, ',', '.'); ?><?= ' €' ?>
        </h2>
    </footer>
</body>

</html>