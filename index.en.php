<?php

ini_set("include_path", '/home/danielxa/php:' . ini_get("include_path") );
include('Mail.php');

if($_POST['email']){

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
    

    $body =  "Email: $contactoemail " . " Mensagem: $textoemail";
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
                <a href="index.php" target="_blank"><button id="pt" class="contactos"></button></a>
                <a href="index.en.php" target="_blank"><button  id="en" class="contactos shadow border-bottom border-black border-3"></button></a>
            </div>
        </div>
        <div class="row pessoal align-content-center justify-content-center">
            <div class="pessoal-bola d-flex flex-column align-content-center justify-content-center gap-3">
                <div class="col-12 text-center">
                    <img src="imagens/Daniel_Almeida_Programador_PHP_Python_SQL.png" alt="dxa_php_python_sql" id="img-dxa">
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
                        <a href="https://drive.google.com/file/d/1-yKM8sWJY8KSAe_N8izbp9ydcDB4jS8p/view?usp=sharing" target="_blank" ><button id="cvpt" class="contactos"></button></a>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <main class="container">


        <div class="row about-me mb-5">
            <div class="col-10">
                <p>With a decade of experience driving productions in manufacturing environments, I am eager to
                    transition my career
                    into the dynamic field of programming.</p>

                <p>
                    Throughout my career, I have successfully led cross-functional teams in implementing lean
                    manufacturing principles,
                    optimizing production processes, and delivering innovative solutions. My experience has equipped me
                    with a strong
                    problem-solving mindset and a commitment to continuous improvement.
                </p>

                <p>
                    Programming has always been a passion of mine, and I am excited to apply my newly acquired skills to
                    a professional
                    setting. Over the past few years, I have dedicated myself to intensive study, completing a
                    Full-Stack Web Development
                    program with honors (19/20) and a Python programming course.
                </p>

                <p>
                    My technical skills include proficiency in HTML, CSS, Bootstrap, SQL, Java, JavaScript, PHP, C, and
                    Python, along with
                    experience using frameworks such as Django. AS a freelancer, I have successfully applied these
                    skills to create the
                    Snupe landing page (www.snupe.pt) and develop custom tools and databases for client management,
                    sales tracking,
                    and inventory for Snupe.
                </p>

                <p>
                    I am eager to join a team where I can continue to learn and grow as a programmer. I am confident
                    that my strong work
                    ethic, coupled with my enthusiasm for coding, will make me a valuable asset to your organization.
                </p>

                <p>
                    PHP | C | Python | SQL | Java | JavaScript
                    <br>
                    Web Developer | Full-Stack | Director | Entrepreneur
                </p>
            </div>
        </div>

        <div class="row portefolio my-5 d-flex gap-4 justify-content-center">
            <div class="col-12 p-5">
                <h2>
                    <marquee behavior="scroll" direction="right">Portefólio</marquee>
                </h2>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/snupe.png" alt="">
                </a>
                <p>
                    Landing Page, with a contact form, linecard informationand and product details.
                    As this is intended to be a temporary website, orders and further inquiries are redirected to a
                    WhatsApp catalog.
                    The client has requested a simple website design that adheres to these specific guidelines.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/bd_snupe.png" alt="">
                </a>
                <p>
                    Database with all information regarding athletes, clients, nutrition appointments, sales, sellers,
                    stocks, and production.
                    <br>
                    A truly comprehensive ERP system, accessible online and capable of handling the initial stages of
                    this company's operations.
                    <br>
                    This was a rewarding project, allowing me to apply my knowledge from production processes to
                    software development.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/iris.png" alt="">
                </a>
                <p>
                    Hearings. This site was intended to showcase products, prices, and provide a platform for sharing
                    experiences and ideas.
                    <br>
                    The client wanted to redirect buyers to WhatsApp to facilitate further discussions, idea-sharing,
                    and building relationships.
                    <br>
                    This is a valuable tool for a small business looking to grow.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/simulador_javascript.png" alt="">
                </a>
                <p>
                    JavaScript: Developing the entire back-end for a renovation cost simulator.
                    <br>
                    Impossible? Challenge accepted!
                    <br>
                    This was my first freelance project, and the initial stage was quite challenging, with no defined
                    design.
                    <br>
                    The simulator was capable of quantifying paint, flooring, doors, windows, and differentiating
                    between renovation and new installations, making it incredibly comprehensive. Data was compiled and
                    ready for database storage.
                </p>
            </div>
            <div class="card col-md-3 col-sm-5 col-10">
                <a href="https://www.snupe.pt" target="_blank">
                    <img src="imagens/sebastiao.png" alt="">
                </a>
                <p>
                    My final project from the Web Full-Stack course.
                    <br>
                    The website was packed with features and highly editable through an extensive back-office. All data
                    could be edited, removed, hidden, or added with ease.
                    <br>
                    This was also the only website I had the opportunity to build from a designer's perspective.

                </p>
            </div>
        </div>

        <div class="row timeline my-5 d-flex">
            <div class="col-12 p-5">
                <h2>
                    <marquee behavior="scroll" direction="right">Timeline</marquee>
                </h2>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2024
                    </h1>
                    <h6>
                        EDUCATION
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        Python
                    </h3>
                    <h6>
                        Python | Django | SQL | C
                        <br>
                        Learning Python was one of my 2024 goals.
                        <br>
                        I've learned to develop websites using Django, Python, and SQL. I've also delved into game
                        development, which proved to be a valuable learning experience.
                        <br>
                        As a bonus, I was able to pick up C programming as well.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-baixo">
                    <h1>
                        2023
                    </h1>
                    <h6>
                        EDUCATION
                    </h6>
                </div>
                <div class="col-md-6 col-12 linha-direita">
                    <h3>
                        Full-Stack Web Developer
                    </h3>
                    <h6>
                        HTML | CSS | Bootstrap | Java | JavaScript | PHP
                        <br>
                        Time to become a programmer and learn from the ground up.
                        <br>
                        The training was highly practical, focusing on real-world scenarios.
                        <br>
                        I learned how to develop websites from scratch, considering all backend aspects to meet client
                        requirements.
                        <br>
                        I've lost count of the websites I've created during training, but I can assure you that each one
                        was meticulously designed, from the backend to the frontend.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
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
                        PRODUCTION DIRECTOR BOCO SEAFOOD A/S
                    </h3>
                    <h6>
                        Led the relocation of Boco Seafood's operations from Denmark to Portugal.<br>
                        Built a new management and operations team to launch a novel product.<br>
                        Developed a strategic market response plan.<br>
                        Managed import and export operations, including customs clearance processes.<br>
                        Created production, quality, and maintenance control tools.<br>
                        Continuously improved product productivity and quality.<br>
                        Implemented strategies to optimize production processes and reduce costs.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
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
                        LEAN
                    </h3>
                    <h6>
                        Implemented process standardization and developed detailed standard operating procedures (SOPs)
                        to improve
                        efficiency and quality.<br>

                        Created automated reporting tools to track key performance indicators (KPIs) and facilitate
                        data-driven decision-
                        making.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
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
                        MANUFACTURING ENGINEER
                    </h3>
                    <h6>
                        Led layout planning and design projects, optimizing production flow and increasing
                        efficiency.<br>
                        Conducted capacity planning studies to ensure adequate resources for new product launches.<br>
                        Developed comprehensive training programs for staff on new products and processes.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
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
                        MANUFACTURING ENGINEER
                    </h3>
                    <h6>
                        Led the development of new production lines and successfully launched multiple new products.<br>
                        Implemented lean manufacturing principles to optimize production processes and reduce costs.<br>
                        Successfully developed new products from by-products, increasing revenue and reducing waste.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
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
                        Lean
                    </h3>
                    <h6>
                        Conducted comprehensive capacity assessments and set production targets to maximize output.<br>
                        Developed detailed standard operating procedures (SOPs) to ensure quality and consistency.<br>
                        Implemented process optimization initiatives, resulting in significant cost reductions.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row-reverse align-content-center justify-content-center entrada-acontecimento my-5">
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
                        Quality Internship
                    </h3>
                    <h6>
                        Development FMEAs for products and components to comply with the new ISO 31000 standards.
                        <br>
                        Improvement reporting templates, communication channels, and organizational methods within the
                        metrology
                        department.
                    </h6>
                </div>
            </div>
            <div
                class="col-12 d-flex flex-column flex-md-row align-content-center justify-content-center entrada-acontecimento my-5">
                <div class="col-md-6 col-12 text-center align-content-center linha-direita linha-baixo">
                    <h1>
                        2007 - 2012
                    </h1>
                    <h6>
                        Aveiro University
                        <br>
                        Bacheral and Post-Graduation
                    </h6>
                </div>
                <div class="col-md-6 col-12">
                    <h3>
                        Industrial Engineering and Managemen
                    </h3>
                    <h6>
                        Very comprehensive study course, equipping students with a full range of tools to tackle any
                        industrial sector.
                        <br>
                        Focused on data analysis and continuous improvement, Industrial Engineers are essential assets
                        for companies, capable of contributing to various roles with solid knowledge.
                    </h6>
                </div>
            </div>

        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-md-6 col-12 d-flex flex-column gap-2 justify-content-center text-center">
                <h3 class="">Contacts</h3>
                <?php if($agradecimento < 1): ?>
                    
                <form action="" method="POST">

                    <p class="">
                        <!-- <label for="nome">nome: </label> -->
                        <input type="text" name="nome" size="" class="w-100" placeholder="Name" required>
                    </p>

                    <p>
                        <!-- <label for="email">email: </label> -->
                        <input type="text" name="email" size="" class="w-100" placeholder="Email" required>
                    </p>

                    <p>
                        <!-- <label for="texto">texto: </label> -->
                        <textarea name="texto" id="texto" cols="30" rows="5" class="w-100" placeholder="Hello Daniel! 
Your profile is a match for what we are looking for. Can we meet? " required></textarea>
                    </p>
                    <button class="btn btn-success" type="submit">Contact</button>
                </form>
                <?php else: ?>
                    <p>
                        Thenks for you contact<br>
                        Will contact you bac as soon as possible.<br>
                    </p>
                <?php endif; ?>
            </div>
        </div>

    </main>

    <footer class="container-fluid bg-black">
        <div class="row final">
            <div class="col-12 text-center my-5">
                <h1>
                    Daniel Almeida &copy;
                </h1>
                <p>2024</p>
            </div>
        </div>
    </footer>

</body>

</html>