<?php

require_once("../requisitos.php");

$form = isset($_POST["username"]) && isset($_POST["password"]);

if ($form) {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $utilizador = verificaLoginPass($user, $pass);

    if (!empty($utilizador)) {

        date_default_timezone_set("Europe/Lisbon");
        $data_atual = date("H:i:s - d/m/Y");
        $id = $utilizador["id"];
        iduSQL("UPDATE utilizador SET ultimo='$data_atual' WHERE id='$id'");
        iduSQL("INSERT INTO acessos (id_utilizador,data) VALUES ('$id','$data_atual')");

        header("Location: inicio.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <!-- Bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Estilo BACKOFFICE -->
    <link rel="stylesheet" href="estilobackoffice.css">
    <script src="../javascript/funcoes.js"></script>

</head>

<body class="bg-dark bg-opacity-25 text-center mt-5 mx-auto">
    <header class="container">
        <div class="row">
            <h1 class="col-12 font-monospace fs-1">
                Bem-vindo ao BACKOFFICE
            </h1>
        </div>
    </header>
    <main class="container my-5">
        <div class="row w-100 mx-2 bg-body-tertiary border border-1 border-light rounded-5">
            <div class="col-12 my-4 d-flex flex-column gap-2">
                <h3>Login</h3>
                <?php if ($form && empty($utilizador)) : ?>
                    <h2 class="text-danger fw-bold text-uppercase">Dados Inválidos</h2>
                <?php endif; ?>


                <form action="" autocomplete="off" method="POST">
                    <input type="text" name="username" placeholder="Username" size="35" required autofocus>
                    <br><br>
                    <input type="password" name="password" placeholder="Password" size="32" required>
                    <i class="bi bi-eye-slash-fill" onmouseover="mostrar(4,this)" onmouseleave="ocultar(4,this)"></i>
                    <br><br>
                    <input type="submit" class="btn btn-success" value="Entrar">
                </form>

            </div>
        </div>

    </main>
    <script src="../javascript/main.js"></script>
</body>

</html>