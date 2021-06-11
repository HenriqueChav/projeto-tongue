<?php 
    include "startSession.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <link rel="shortcut icon" href="favicon_io/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/exercicios.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tongue</title>
  </head>
  <body class="bg-light">

    <!--Barra de navegação-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Exercícios</a>
                    </li>
                    <li class="nav-item">
                        <a href="biblioteca.php" class="nav-link">Biblioteca</a>
                    </li>   
                    <li class="nav-item">
                        <a href="sobre.php" class="nav-link">Sobre</a>
                    </li> 
                    <li class="nav-item">
                        <?php 
                            if ($_SESSION["admin"]) {
                                echo "<a href='editar.php' class='nav-link'>Editar</a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item" id="liBtn">
                        <!--Se o usuário estiver logado aparecerá o botão "perfil", caso contrário aparecerá o botão "login"-->                  
                    </li>                                
                </ul>               
            </div>
        </div>
    </nav>

    <!--Exercícios-->
    <div class="cointainer-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 id="tituloExc">Exercícios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <img class="imgEx" src="imagens/exercicios/verb-to-be.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="imgEx" src="imagens/exercicios/modal-verbs.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="imgEx" src="imagens/exercicios/simple-present.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--Rodapé-->
    <div id="divRodape" class="container-fluid bg-dark">
        <p id="textoRodape" class="text-light">Todos os direitos reservados. <strong>Tongue</strong> © 2021. <a href="tcc-documentacao.html">Sobre o TCC</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/btnDinamicoScript.js"></script>
  </body>
</html>