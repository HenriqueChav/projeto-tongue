<?php
    include "startSession.php";    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="favicon_io/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/geral.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tongue - Login</title>
</head>
<body style="overflow: hidden;">
    
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
                        <a href="exercicios.php" class="nav-link">Exercícios</a>
                    </li>
                    <li class="nav-item">
                        <a href="biblioteca.php" class="nav-link">Biblioteca</a>
                    </li>   
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Sobre</a>
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

    <!--Conteúdo-->
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="margin-top: 12.5vh;margin-bottom: 30vh;">
                <div class="col">
                    <h1>Sobre</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro perferendis, quas repellat dolores vitae ea mollitia ut nemo animi temporibus id soluta, ipsum architecto distinctio dignissimos, at modi saepe sapiente!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, tenetur! Eius in libero harum iste? Fuga ex, facere ducimus animi doloribus recusandae amet quaerat quae cumque, perferendis explicabo non facilis.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, tenetur! Eius in libero harum iste? Fuga ex, facere ducimus animi doloribus recusandae amet quaerat quae cumque, perferendis explicabo non facilis.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--Rodapé-->
    <div id="divRodape" class="container-fluid bg-dark">
        <p id="textoRodape" class="text-light">Todos os direitos reservados. <strong>Tongue</strong> © 2021. <a href="tcc-documentacao.html">Sobre o TCC</a></p>
    </div>

    <!--Scripts(AJAX)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/btnDinamicoScript.js"></script>
</body>
</html>