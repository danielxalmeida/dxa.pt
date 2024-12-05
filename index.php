<?php

ini_set("include_path", '/home/danielxa/php:' . ini_get("include_path") );
include('Mail.php');
$agradecimento = 0;

$form = isset($_POST['email']);

if($form){

    require_once "Mail.php";
    // require_once "Mail/mime.php";
    
    $from = "contact@danielxalmeida.pt";
    $to = "daniel@danielxalmeida.pt";
    
    $subject = $_POST['nome'];
    $contactoemail = $_POST['email'];
    $textoemail = $_POST['texto'];
    
    // $mime = new Mail_mime();

    // Set HTML body with proper content type
    // $mime->setHTMLBody("Email: $contactoemail <br> Mensagem: $textoemail");
    
    // $mime->setHeader('Content-Type',$mime->getType());
    

    $body =  "Nome: $subject \n\nEmail: $contactoemail \n\nMensagem: $textoemail";
    // $body = $mime->get();
    $host = "mail.danielxalmeida.pt";
    
    $username = "contact@danielxalmeida.pt";
    $password = "gWN&HK^VwN71045?";
    
    $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);
    $smtp = Mail::factory('smtp', 
    array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
    
    $mail = $smtp->send($to, $headers, $body);
    // $mail = $smtp->send($to, $headers, $mime->get());

    $agradecimento = 1;
    
}


?>
<!DOCTYPE html>
<html lang="PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Almeida</title>
    <!-- Bootstrap 5.3.3 11/2024 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="styledxa.css">
</head>

<body>


    <header class="container-fluid">
        <div class="row language">
            <div class="col-12 w-100 d-flex justify-content-end gap-2">
                <a href="index.php" target="_blank"><button id="pt" class="contactos shadow border-bottom border-black border-3"></button></a>
                <a href="index.en.php" target="_blank"><button  id="en" class="contactos"></button></a>
            </div>
        </div>
        <div class="row pessoal align-content-center justify-content-center">
            <div class="pessoal-bola d-flex flex-column align-content-center justify-content-center gap-3">
                <div class="col-12 text-center">
                    <img src="imagens/Daniel_Almeida_Programador_PHP_Python_SQL.png" alt="dxa_php_python_sql"
                        id="img-dxa">
                </div>
                <div class="col-12 text-center">
                    <h1>
                        Daniel Almeida
                    </h1>
                </div>
                <div class="col-12 text-center">
                    <h3>
                        Junior Full-Stack Developer
                    </h3>
                </div>
                <div class="col-12 text-center">
                    <nav class="">
                        <a href="https://www.linkedin.com/in/danielxalmeida/" target="_blank"><button id="linkdin"
                                class="contactos"></button></a>
                        <a href="https://github.com/danielxalmeida" target="_blank"><button id="github"
                                class="contactos"></button></a>
                        <a href="mailto:contact@danielxalmeida.pt" target="_blank"><button id="email"
                                class="contactos"></button></a>
                        <a href="https://drive.google.com/file/d/1S1Ns0g6QwEaLSmLVREeOrD6RdACATqJ3/view?usp=sharing"
                            target="_blank"><button id="cvpt" class="contactos"></button></a>
                        <!-- <a href="https://drive.google.com/file/d/1-yKM8sWJY8KSAe_N8izbp9ydcDB4jS8p/view?usp=sharing" target="_blank"><button  id="cven" class="contactos"></button></a> -->
                        <!-- <a href="imagens/PT.pdf" target="_blank">CV PT</a> -->
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <main class="container">


        <div class="row about-me mb-5">
            <div class="col-10">
                <p>Engenheiro de Gestão Industrial, formado na Universidade de Aveiro.</p>

                <p>
                    O meu percurso profissional iniciou-se na area da produção ao ingressar na industria
                    Alimentar, onde analisei, defini e normalizei todos os processos de fabrico.
                    <br>
                    Como prémio pelo trabalho desenvolvido, tive a oportunidade de iniciar um projeto com
                    um parceiro Dinamarquês, para a produção de um novo produto. Coordenei todo o
                    processo, desde a instalação dos equipamentos à formação das equipas envolvidas,
                    levando o processo ao sucesso.
                </p>

                <p>
                    Decidi então que era a hora de abraçar um novo projeto e desfiar-me numa aventura no
                    estrangeiro.
                    <br>
                    Esta decisão levou-me até à Gronelândia, onde tive a oportunidade de fazer a abertura de
                    uma nova unidade industrial para o processamento de peixe. Padronizar, definir e
                    planear.
                </p>

                <p>
                    Voltando a Portugal, tive a oportunidade de, aos 30 anos, assumir o cargo de Diretor de
                    Produção na Boco Seafood. Deslocalizamos a fábrica para Portugal e criamos 40 novos
                    postos de trabalho.
                    <br>
                    O planeamento estratégico e os detalhes da logística internacional foram os pontos mais
                    desafiantes destas novas funções, sendo que consegui levar a empresa ao seu ponto
                    mais alto de sempre.
                </p>

                <p>
                    Finda esta etapa, decidi investir tempo na minha formação e aprender mais sobre
                    programação. Completei, como melhor aluno, duas formações: Full-Stack Web Developer
                    e Programação em Python.
                </p>

                <p>
                    PHP | C | Python | SQL | Java | JavaScript
                    <br>
                    Web Developer | Full-Stack | Diretor | Empreendedor
                </p>
            </div>
        </div>

        <div class="row portefolio my-5 d-flex gap-4 justify-content-center">
            <div class="col-12 p-5" id="oportefolio">
                <h2>
                    <marquee behavior="scroll" direction="right">Portefólio</marquee>
                </h2>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/SNUPE_LANDPAGE_GIF.gif" alt="">
                </a>
                <p>
                    Landing Page, com formulário de contacto e informações sobre os diferentes produtos.
                    A página incorpora toda a informação relativa aos produtos vendidos e permite ainda o
                    reencaminhamento para a plataforma de Whatsapp da empresa, diretamente para o seu catálogo de venda
                    ao público.
                    Design tal como pedido pelo cliente.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/snupe_store_gif.gif" alt="">
                </a>
                <p>
                    Base de dados para registo de atletas, vendas, produtos, fornecedores, matérias primas.. e muito
                    mais. <br>
                    uma base de dados capaz dinâmica, capaz de registar todos os passos, desde a compra e stocks de
                    componentes até à venda e análise das vendas por cliente, vendedor, produto, mês... <br>
                    Em resumo, uma mistura entre a minha experiência profissional anterior e os conhecimentos atuais.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="#oportefolio">
                    <img src="imagens/iris_gif.gif" alt="">
                </a>
                <p>
                    Desenvolvimento e proposta para site de bijuteria, com 2 tipos de homepage configuraveis em
                    backoffice, e toda a base de dados e personalização necessária. <br>
                    Loja online, em que o comprador é redirecionado para o contacto direto do vendedor. <br>

                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="#oportefolio">
                    <img src="imagens/simulador.gif" alt="">
                </a>
                <p>
                    Desenvolvimento de todo o backoffice de um simulador de custos de obras de renovação, feito em
                    JavaScript com relcolha de dados em PHP e ligação para Base de dados do cliente.
                    <br>
                    O meu primeiro trabalho como freelancer, que seria para incluir num projeto em inicio de
                    desenvolvimento, sem design definido.
                    <br>
                    Simulador muito completo, com 11 etapas e centenas de variaveis e combinações. Um trabalho
                    desafiante.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.sebastiaoalves.com" target="_blank">
                    <img src="imagens/sebastiao.gif" alt="">
                </a>
                <p>
                    Trabalho final do curso de Web Full-Stack.
                    Um site feito totalmente de raiz, com o respectivo backoffice.
                </p>
            </div>
        </div>

        <div class="row timeline my-5 d-flex justify-content-center">
            <div class="col-12 p-5">
                <h2>
                    <marquee behavior="scroll" direction="right">Timeline</marquee>
                </h2>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2024
                    </h1>
                    <h6>
                        Formação
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        Programação em Python
                    </h3>
                    <h6>
                        Python | Django | SQL | C
                        <br>
                        Aprender Python era um dos meus objectivos para 2024.
                        <br>
                        Esta formação ensinou-me a desenvolver desde jogos a sites completos, usando Python, Django e
                        SQL.
                        <br>
                        Como bonus, aprendi ainda a programar em C, complementando assim as minhas competências.
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-baixo">
                    <h1>
                        2023
                    </h1>
                    <h6>
                        Formação
                    </h6>
                </div>
                <div class="col-md-6 col-12 linha-direita">
                    <h3>
                        Full-Stack Web Developer
                    </h3>
                    <h6>
                        HTML | CSS | Bootstrap | Java | JavaScript | PHP
                        <br>
                        Tempo de aprender e de me tornar programador. <br>
                        Curso muito prático, com muitos casos reais e exercicios diários. <br>
                        Aprendi a desenvolver sites do zero e a pensar o meu código backend de forma a atingir o
                        objetivo do site. <br>
                        Desenvolvi muitos projetos e muitos sites, sempre com o maior dos detalhes quer a nivel de
                        front-end como back-end.
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2019 - 2024
                    </h1>
                    <h6>
                        BOCO SEAFOOD A/S
                        <br>
                        Portugal
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        DIRETOR DE PRODUÇÃO INDUSTRIAL
                    </h3>
                    <h6>
                        • Coordenação da deslocalização das instalações da Boco Seafood da Dinamarca para Portugal.<br>
                        • Formação de equipe de gestão e operadores para novo produto.<br>
                        • Planeamento estratégico de resposta ao mercado.<br>
                        • Coordenação dos movimentos de importação e exportação, lidando com processos
                        alfandegários.<br>
                        • Desenvolvimento de ferramentas de controlo de produção, qualidade e manutenção.<br>
                        • Melhoria contínua da produtividade e qualidade dos produtos.<br>
                        • Implementação de estratégias para otimizar processos produtivos e reduzir custos.<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-baixo">
                    <h1>
                        2019
                    </h1>
                    <h6>
                        THE NAVIGATOR COMPANY
                    </h6>
                </div>
                <div class="col-md-6 col-12 linha-direita">
                    <h3>
                        TÉCNICO DE LEAN
                    </h3>
                    <h6>
                        • Normalização de processos<br>
                        • Instruções de trabalho<br>
                        • Desenvolvi ferramentas de registo e comparação de indicadores de produção<br>
                        • Desenvolvimento de automatismos de reporte automático<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2017 - 2018
                    </h1>
                    <h6>
                        POLAR RAAJAT A/S
                        <br>
                        Greenland
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        ENGENHEIRO DE PRODUÇÃO INDUSTRIAL
                    </h3>
                    <h6>
                        • Planeamento e definição de layouts<br>
                        • Identificação das capacidades produtivas<br>
                        • Formação dos quadros para os novos produtos<br>
                        • Desenvolvimento de novos produtos<br>
                        • Planeamento e controlo para os diferentes produtos<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-baixo">
                    <h1>
                        2013 - 2017
                    </h1>
                    <h6>
                        MAR LUSITANO, PRODUTOS ALIMENTARES, LDA
                    </h6>
                </div>
                <div class="col-md-6 col-12 linha-direita">
                    <h3>
                        ENGENHEIRO DE PRODUÇÃO INDUSTRIAL
                    </h3>
                    <h6>
                        • Desenvolvimento de novas linhas de produção e novos produtos<br>
                        • Planeamento e gestão da produção<br>
                        • Desenvolvimento e melhoria do processos<br>
                        • Redução e rentabilização de subprodutos, através de novos produtos e métodos de produção.<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2012 - 2013
                    </h1>
                    <h6>
                        MAR LUSITANO, PRODUTOS ALIMENTARES, LDA
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        MÉTODOS E TEMPOS
                    </h3>
                    <h6>
                        • Definição das capacidades instaladas<br>
                        • Definição de objetivos de produção<br>
                        • Instruções de trabalho<br>
                        • Normalização de processos e padrões de qualidade<br>
                        • Apuramento de custos de produção<br>
                        • Optimização de processos<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-baixo">
                    <h1>
                        2011 - 2012
                    </h1>
                    <h6>
                        TEKA PORTUGAL, S.A
                    </h6>
                </div>
                <div class="col-md-6 col-12 linha-direita">
                    <h3>
                        ESTÁGIO NO DEPARTAMENTO DE QUALIDADE
                    </h3>
                    <h6>
                        • No departamento de qualidade da Teka, desenvolvi FMEAs para produtos e componentes, tendo em
                        vista a certificação pelas novas normas ISO 31000<br>
                        • Paralelamente a este desenvolvimento, implementei novos modelos de relatórios, canais de
                        comunicação e metodos de organização na secção de metrologia<br>
                    </h6>
                </div>
            </div>
            <div
                class="col-10 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2007 - 2012
                    </h1>
                    <h6>
                        Universidade de Aveiro
                        <br>
                        Licenciatura e Pós-Graduação
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        ENGENHARIA E GESTÃO INDUSTRIAL
                    </h3>
                    <h6>
                        Formação transversal e polivalente, capaz de capacitar para todas as funções e setores
                        industriais. <br>
                        O foco na análise de dados e na melhoria continua são um cartão diferenciadora de um EGI. <br>
                        Um Engenheiro de Gestão Industrial é um Engenheiro muito versátil, capaz de executar de forma
                        exímia, qualquer cargo na indústria.
                    </h6>
                </div>
            </div>

        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-md-6 col-12 d-flex flex-column gap-2 justify-content-center text-center">
                <h3 class="">Contactos</h3>
                <?php if($agradecimento < 1): ?>
                <form action="" method="POST">

                    <p class="">
                        <!-- <label for="nome">nome: </label> -->
                        <input type="text" name="nome" size="" class="w-100" placeholder="Nome" required>
                    </p>

                    <p>
                        <!-- <label for="email">email: </label> -->
                        <input type="text" name="email" size="" class="w-100" placeholder="Email" required>
                    </p>

                    <p>
                        <!-- <label for="texto">texto: </label> -->
                        <textarea name="texto" id="texto" cols="30" rows="5" class="w-100" placeholder="Olá Daniel!
O teu perfil é o ideal para esta oportunidade. Podemos falar? " required></textarea>
                    </p>
                    <button class="btn btn-success" type="submit">Contactar</button>
                </form>
                <?php else: ?>
                    <p>
                        Obrigado pelo seu contacto. <br>
                        Entrarei em contacto assim que possível. <br>
                    </p>
                <?php endif; ?>
            </div>
        </div>

    </main>

    <footer class="container-fluid bg-black">

        <div class="row final">
            <div class="col-12 text-center my-1">
                <h1>
                    Daniel Almeida &copy;
                </h1>
                <p>2024</p>
            </div>
        </div>
    </footer>

</body>

</html>