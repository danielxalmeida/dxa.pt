function menosValor(portasi) {
    let numero = document.getElementById(portasi);
    if (numero.value > 0) {
        numero.value--;
    }
    else {
        numero.value == 0;
    }
}
function maisValor(portasi) {
    let numero = document.getElementById(portasi);
    if (numero.value < 9) {
        numero.value++;
    }
    else {
        numero.value == 9;
    }
}

function updateTableRows() {

    let numRowswc = tipologiawc.value;
    let numRowsquarto = tipologiaquartos.value;

    tableBody.innerHTML = "";

    if (quarto.checked) {
        for (let i = 0; i < numRowsquarto; i++) {
            tableBody.innerHTML += `<tr>
    <td>Quarto ${i + 1}</td>
    <td><input type="number" name="Quartoc${i + 1}" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="Quartol${i + 1}" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="Quartoa${i + 1}" min="0.5" max="10" step="0.01" class="" required></td>
    </tr>`
        }
    }

    if (wc.checked) {
        for (let i = 0; i < numRowswc; i++) {
            tableBody.innerHTML += `<tr>
    <td>WC ${i + 1}</td>
    <td><input type="number" name="wcc${i + 1}" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="wcl${i + 1}" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="wca${i + 1}" min="0.5" max="10" step="0.01" class="" required></td>
    </tr>`
        }
    }

    if (tipologiasala.checked) {
        tableBody.innerHTML += `<tr>
    <td>Sala</td>
    <td><input type="number" name="Salac" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="Salal" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="Salaa" min="0.5" max="10" step="0.01" class="" required></td>
    </tr>`
    }

    if (tipologiacozinha.checked) {
        tableBody.innerHTML += `<tr>
    <td>cozinha</td>
    <td><input type="number" name="cozinhac" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="cozinhal" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="cozinhaa" min="0.5" max="10" step="0.01" class="" required></td>
    </tr>`
    }

    if (tipologiacirculacao.checked) {
        tableBody.innerHTML += `<tr>
    <td>circulacao</td>
    <td><input type="number" name="circulacaoc" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="circulacaol" min="0.5" max="100" step="0.01" class="" required></td>
    <td><input type="number" name="circulacaoa" min="0.5" max="10" step="0.01" class="" required></td>
    </tr>`
    }

    // Call the updateArea function after the table is initially loaded
    // updateArea();
}

function updateArea() {

    let areaTotal = 0;
    let paredesTotal = 0;

    let areaSala = 0.0;
    let areaCozinha = 0.0;
    let areaWC = 0.0;
    let areaQuartos = 0.0;
    let areaCirculacao = 0.0;

    let paredesSala = 0.0;
    let paredesCozinha = 0.0;
    let paredesWC = 0.0;
    let paredesQuartos = 0.0;
    let paredesCirculacao = 0.0;

    let numRowswc = tipologiawc.value;
    let numRowsquarto = tipologiaquartos.value;
    let comp, comprimento, larg, largura, altu, altura, chao, paredes;
    let campoarea = document.getElementById("total-area");

    if (quarto.checked) {
        for (let i = 0; i < numRowsquarto; i++) {
            comp = `input[name^="Quartoc${i + 1}"]`;
            larg = `input[name^="Quartol${i + 1}"]`;
            altu = `input[name^="Quartoa${i + 1}"]`;
            comprimento = document.querySelector(comp);
            largura = document.querySelector(larg);
            altura = document.querySelector(altu);
            chao = parseFloat(comprimento.value) * parseFloat(largura.value);
            paredes = (parseFloat(comprimento.value) + parseFloat(largura.value)) * parseFloat(altura.value);
            areaQuartos += chao;
            paredesQuartos += paredes;
        }
        areaTotal += areaQuartos;
        paredesTotal += paredesQuartos;
    }
    if (wc.checked) {
        for (let i = 0; i < numRowswc; i++) {
            comp = `input[name^="wcc${i + 1}"]`;
            larg = `input[name^="wcl${i + 1}"]`;
            altu = `input[name^="wca${i + 1}"]`;
            comprimento = document.querySelector(comp);
            largura = document.querySelector(larg);
            altura = document.querySelector(altu);
            chao = parseFloat(comprimento.value) * parseFloat(largura.value);
            paredes = (parseFloat(comprimento.value) + parseFloat(largura.value)) * parseFloat(altura.value);
            areaWC += chao;
            paredesWC += paredes;
        }
        areaTotal += areaWC;
        paredesTotal += paredesWC;
    }


    if (tipologiasala.checked) {
        comprimento = document.querySelector('input[name^="Salac"]');
        largura = document.querySelector('input[name^="Salal"]');
        altura = document.querySelector('input[name^="Salaa"]');
        chao = parseFloat(comprimento.value) * parseFloat(largura.value);
        paredes = (parseFloat(comprimento.value) + parseFloat(largura.value)) * parseFloat(altura.value);
        areaSala += chao;
        paredesSala += paredes;
        areaTotal += areaSala;
        paredesTotal += paredesSala;
    }

    if (tipologiacozinha.checked) {
        comprimento = document.querySelector('input[name^="cozinhac"]');
        largura = document.querySelector('input[name^="cozinhal"]');
        altura = document.querySelector('input[name^="cozinhaa"]');
        chao = parseFloat(comprimento.value) * parseFloat(largura.value);
        paredes = (parseFloat(comprimento.value) + parseFloat(largura.value)) * parseFloat(altura.value);
        areaCozinha += chao;
        paredesCozinha += paredes;
        areaTotal += areaCozinha;
        paredesTotal += paredesCozinha;
    }

    if (tipologiacirculacao.checked) {
        comprimento = document.querySelector('input[name^="circulacaoc"]');
        largura = document.querySelector('input[name^="circulacaol"]');
        altura = document.querySelector('input[name^="circulacaoa"]');
        chao = parseFloat(comprimento.value) * parseFloat(largura.value);
        paredes = (parseFloat(comprimento.value) + parseFloat(largura.value)) * parseFloat(altura.value);
        areaCirculacao += chao;
        paredesCirculacao += paredes;
        areaTotal += areaCirculacao;
        paredesTotal += paredesCirculacao;
    }

    campoarea.innerHTML = "Area Total: " + Math.ceil(areaTotal) + " m<sup>2</sup> <br>";
    campoarea.innerHTML += "Paredes Total: " + Math.ceil(paredesTotal) + " m<sup>2</sup>";


}

function step3() {
    opcoespavimento.classList.toggle("esconde");
}
function step4() {
    opcoestetos.classList.toggle("esconde");
}
function step5() {
    opcoesparedes.classList.toggle("esconde");
}
function step6() {
    opcoesportas.classList.toggle("esconde");
}
function step7() {
    opcoesroupeiros.classList.toggle("esconde");
}
function step8() {
    opcoesjanelas.classList.toggle("esconde");
}

function updatetabelatetos() {

    let numRowswc = tipologiawc.value;
    let numRowsquarto = tipologiaquartos.value;

    tabletetos.innerHTML = "";

    if (quarto.checked) {
        for (let i = 0; i < numRowsquarto; i++) {
            tabletetos.innerHTML += `
            <tr>
                <td>Quarto ${i + 1}</td>
                <td>
                    <select name="Quarto${i + 1}opcao" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}tipo" id="">
                        <option value="1">Estuque</option>
                        <option value="2">tecto falso de gesso
                            hidrófugo</option>
                        <option value="3">tecto falso de gesso
                            cartonado</option>
                        <option value="4">isolamento
                            térmico/acustico</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}tinta" id="">
                        <option value="2">Tinta Superior</option>
                        <option value="1">Tinta Média</option>
                    </select>
                </td>
            </tr>
            `
        }
    }

    if (wc.checked) {
        for (let i = 0; i < numRowswc; i++) {
            tabletetos.innerHTML += `
            <tr>
                <td>wc ${i + 1}</td>
                <td>
                    <select name="wc${i + 1}opcao" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="wc${i + 1}tipo" id="">
                        <option value="1">Estuque</option>
                        <option value="2">tecto falso de gesso
                            hidrófugo</option>
                        <option value="3">tecto falso de gesso
                            cartonado</option>
                        <option value="4">isolamento
                            térmico/acustico</option>
                    </select>
                </td>
                <td>
                    <select name="wc${i + 1}tinta" id="">
                        <option value="2">Tinta Superior</option>
                        <option value="1">Tinta Média</option>
                    </select>
                </td>
            </tr>
            `
        }
    }

    if (tipologiasala.checked) {
        tabletetos.innerHTML += `
        <tr>
            <td>Sala</td>
            <td>
                <select name="Salaopcao" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Salatipo" id="">
                    <option value="1">Estuque</option>
                    <option value="2">tecto falso de gesso
                        hidrófugo</option>
                    <option value="3">tecto falso de gesso
                        cartonado</option>
                    <option value="4">isolamento
                        térmico/acustico</option>
                </select>
            </td>
            <td>
                <select name="Salatinta" id="">
                    <option value="2">Tinta Superior</option>
                    <option value="1">Tinta Média</option>
                </select>
            </td>
        </tr>
        `
    }

    if (tipologiacozinha.checked) {
        tabletetos.innerHTML += `
        <tr>
            <td>cozinha</td>
            <td>
                <select name="cozinhaopcao" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="cozinhatipo" id="">
                    <option value="1">Estuque</option>
                    <option value="2">tecto falso de gesso
                        hidrófugo</option>
                    <option value="3">tecto falso de gesso
                        cartonado</option>
                    <option value="4">isolamento
                        térmico/acustico</option>
                </select>
            </td>
            <td>
                <select name="cozinhatinta" id="">
                    <option value="2">Tinta Superior</option>
                    <option value="1">Tinta Média</option>
                </select>
            </td>
        </tr>
        `
    }

    if (tipologiacirculacao.checked) {
        tabletetos.innerHTML += `
        <tr>
            <td>Circulacao</td>
            <td>
                <select name="Circulacaoopcao" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Circulacaotipo" id="">
                    <option value="1">Estuque</option>
                    <option value="2">tecto falso de gesso
                        hidrófugo</option>
                    <option value="3">tecto falso de gesso
                        cartonado</option>
                    <option value="4">isolamento
                        térmico/acustico</option>
                </select>
            </td>
            <td>
                <select name="Circulacaotinta" id="">
                    <option value="2">Tinta Superior</option>
                    <option value="1">Tinta Média</option>
                </select>
            </td>
        </tr>
        `
    }

}

function updatetabelapavimentos() {

    let numRowswc = tipologiawc.value;
    let numRowsquarto = tipologiaquartos.value;

    tabelapavimentos.innerHTML = "";

    if (quarto.checked) {
        for (let i = 0; i < numRowsquarto; i++) {
            tabelapavimentos.innerHTML += `
            <tr>
                <td>Quarto ${i + 1}</td>
                <td>
                    <select name="Quarto${i + 1}opcaopavimentos" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}tipopavimentos" id="">
                        <option value="1">Madeira</option>
                        <option value="2">Flutuante</option>
                        <option value="3">Vinil</option>
                        <option value="4">Cerâmica</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}qualidadepavimentos" id="">
                        <option value="3">Qualidade Superior</option>
                        <option value="2">Qualidade Média-Alta</option>
                        <option value="1">Qualidade Média</option>
                    </select>
                </td>
            </tr>
            `
        }
    }

    if (wc.checked) {
        for (let i = 0; i < numRowswc; i++) {
            tabelapavimentos.innerHTML += `
            <tr>
                <td>wc ${i + 1}</td>
                <td>
                    <select name="wc${i + 1}opcaopavimentos" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="wc${i + 1}tipopavimentos" id="">
                    <option value="1">Madeira</option>
                    <option value="2">Flutuante</option>
                    <option value="3">Vinil</option>
                    <option value="4">Cerâmica</option>
                </select>
                </td>
                <td>
                    <select name="wc${i + 1}qualidadepavimentos" id="">
                    <option value="3">Qualidade Superior</option>
                    <option value="2">Qualidade Média-Alta</option>
                    <option value="1">Qualidade Média</option>
                </select>
                </td>
            </tr>
            `
        }
    }

    if (tipologiasala.checked) {
        tabelapavimentos.innerHTML += `
        <tr>
            <td>Sala</td>
            <td>
                <select name="Salaopcaopavimentos" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Salatipopavimentos" id="">
                <option value="1">Madeira</option>
                <option value="2">Flutuante</option>
                <option value="3">Vinil</option>
                <option value="4">Cerâmica</option>
            </select>
            </td>
            <td>
                <select name="Salaqualidadepavimentos" id="">
                <option value="3">Qualidade Superior</option>
                <option value="2">Qualidade Média-Alta</option>
                <option value="1">Qualidade Média</option>
        </select>
            </td>
        </tr>
        `
    }

    if (tipologiacozinha.checked) {
        tabelapavimentos.innerHTML += `
        <tr>
            <td>cozinha</td>
            <td>
                <select name="cozinhaopcaopavimentos" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="cozinhatipopavimentos" id="">
                <option value="1">Madeira</option>
                <option value="2">Flutuante</option>
                <option value="3">Vinil</option>
                <option value="4">Cerâmica</option>
            </select>
            </td>
            <td>
                <select name="cozinhaqualidadepavimentos" id="">
                <option value="3">Qualidade Superior</option>
                <option value="2">Qualidade Média-Alta</option>
                <option value="1">Qualidade Média</option>
        </select>
            </td>
        </tr>
        `
    }

    if (tipologiacirculacao.checked) {
        tabelapavimentos.innerHTML += `
        <tr>
            <td>Circulacao</td>
            <td>
                <select name="Circulacaoopcaopavimentos" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Circulacaotipopavimentos" id="">
                <option value="1">Madeira</option>
                <option value="2">Flutuante</option>
                <option value="3">Vinil</option>
                <option value="4">Cerâmica</option>
            </select>
            </td>
            <td>
                <select name="Circulacaoqualidadepavimentos" id="">
                <option value="3">Qualidade Superior</option>
                <option value="2">Qualidade Média-Alta</option>
                <option value="1">Qualidade Média</option>
        </select>
            </td>
        </tr>
        `
    }

}

function updatetabelaparedes() {

    let numRowswc = tipologiawc.value;
    let numRowsquarto = tipologiaquartos.value;

    tabelaparedes.innerHTML = "";

    if (quarto.checked) {
        for (let i = 0; i < numRowsquarto; i++) {
            tabelaparedes.innerHTML += `
            <tr>
                <td>Quarto ${i + 1}</td>
                <td>
                    <select name="Quarto${i + 1}opcaoparedes" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}tipoparedes" id="">
                        <option value="1">Estuque</option>
                        <option value="2">Gesso Cartonado (Pladur)</option>
                        <option value="3">Forra térmica / Acústica</option>
                    </select>
                </td>
                <td>
                    <select name="Quarto${i + 1}qualidadeparedes" id="">
                        <option value="3">Tinta plástica Superior</option>
                        <option value="2">Tinta plástica</option>
                        <option value="1">Tinta simples</option>
                    </select>
                </td>
            </tr>
            `
        }
    }

    if (wc.checked) {
        for (let i = 0; i < numRowswc; i++) {
            tabelaparedes.innerHTML += `
            <tr>
                <td>wc ${i + 1}</td>
                <td>
                    <select name="wc${i + 1}opcaoparedes" id="">
                        <option value="0">Manter</option>
                        <option value="1">Reparar</option>
                        <option value="2">Novo</option>
                    </select>
                </td>
                <td>
                    <select name="wc${i + 1}tipoparedes" id="">
                    <option value="1">Estuque</option>
                    <option value="2">Gesso Cartonado (Pladur)</option>
                    <option value="3">Forra térmica / Acústica</option>
            </select>
                </td>
                <td>
                    <select name="wc${i + 1}qualidadeparedes" id="">
                    <option value="3">Tinta plástica Superior</option>
                    <option value="2">Tinta plástica</option>
                    <option value="1">Tinta simples</option>
            </select>
                </td>
            </tr>
            `
        }
    }

    if (tipologiasala.checked) {
        tabelaparedes.innerHTML += `
        <tr>
            <td>Sala</td>
            <td>
                <select name="Salaopcaoparedes" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Salatipoparedes" id="">
                <option value="1">Estuque</option>
                <option value="2">Gesso Cartonado (Pladur)</option>
                <option value="3">Forra térmica / Acústica</option>
    </select>
            </td>
            <td>
                <select name="Salaqualidadeparedes" id="">
                <option value="3">Tinta plástica Superior</option>
                <option value="2">Tinta plástica</option>
                <option value="1">Tinta simples</option>
</select>
            </td>
        </tr>
        `
    }

    if (tipologiacozinha.checked) {
        tabelaparedes.innerHTML += `
        <tr>
            <td>cozinha</td>
            <td>
                <select name="cozinhaopcaoparedes" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="cozinhatipoparedes" id="">
                <option value="1">Estuque</option>
                <option value="2">Gesso Cartonado (Pladur)</option>
                <option value="3">Forra térmica / Acústica</option>
    </select>
            </td>
            <td>
                <select name="cozinhaqualidadeparedes" id="">
                <option value="3">Tinta plástica Superior</option>
                <option value="2">Tinta plástica</option>
                <option value="1">Tinta simples</option>
</select>
            </td>
        </tr>
        `
    }

    if (tipologiacirculacao.checked) {
        tabelaparedes.innerHTML += `
        <tr>
            <td>Circulacao</td>
            <td>
                <select name="Circulacaoopcaoparedes" id="">
                    <option value="0">Manter</option>
                    <option value="1">Reparar</option>
                    <option value="2">Novo</option>
                </select>
            </td>
            <td>
                <select name="Circulacaotipoparedes" id="">
                <option value="1">Estuque</option>
                <option value="2">Gesso Cartonado (Pladur)</option>
                <option value="3">Forra térmica / Acústica</option>
    </select>
            </td>
            <td>
                <select name="Circulacaoqualidadeparedes" id="">
                <option value="3">Tinta plástica Superior</option>
                <option value="2">Tinta plástica</option>
                <option value="1">Tinta simples</option>
</select>
            </td>
        </tr>
        `
    }

}

function linharoupeiro() {
    tabelaroupeiros.innerHTML ="";
    let numero = document.getElementById("nroupeiros");
    for (let i = 0; i < numero.value; i++) {
        tabelaroupeiros.innerHTML +=
            `<tr>
        <td>
            <input type="number" name="comprimentoroupeiro${i + 1}" id="" step="0.1" min="0" class="" requiered>
        </td>
        <td>
            <input type="number" name="larguraroupeiro${i + 1}" id="" step="0.1" min="0" class="" requiered>
        </td>
        <td>
            <select name="tiporoupeiro${i + 1}" id="">
                <option value="2">Restaurar</option>
                <option value="4">Novo - Qualidade Superior</option>
                <option value="3">Novo - Qualidade média-Alta</option>
                <option value="1">Novo - Qualidade média</option>
            </select>
        </td>
    </tr>
    `;
    }
}

function linhajanelas() {
    tabelajanelas.innerHTML ="";
    let numero = document.getElementById("njanelas");
    for (let i = 0; i < numero.value; i++) {
        tabelajanelas.innerHTML +=
            `<tr>
        <td>
            <input type="number" name="comprimentojanelas${i + 1}" id="" step="0.1" min="0" class="" requiered>
        </td>
        <td>
            <input type="number" name="largurajanelas${i + 1}" id="" step="0.1" min="0" class="" requiered>
        </td>
        <td>
            <select name="tipojanelas${i + 1}" id="">
                <option value="2">Oscilobatente</option>
                <option value="1">correr</option>
            </select>
        </td>
    </tr>
    `;
    }
}