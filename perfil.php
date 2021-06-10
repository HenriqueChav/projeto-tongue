<?php 
    include "startSession.php"
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <?php 
        if ($_SESSION["acimaLimite"]) {
            echo '<script>alert("Tamanho de arquivo não suportado!")</script>';
            $_SESSION["acimaLimite"] = false;
        }
    ?>
    <link rel="shortcut icon" href="favicon_io/favicon.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/perfil.css">
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
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="exercicios.html" class="nav-link">Exercícios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Biblioteca</a>
                    </li>   
                    <li class="nav-item">
                        <a href="sobre.html" class="nav-link">Sobre</a>
                    </li> 
                    <li class="nav-item" id="liBtn">
                        <a class="nav-link" id="btnSair">Sair</a>                  
                    </li>                                
                </ul>               
            </div>
        </div>
    </nav>

    <!--Saudação-->
    <div class="container-fluid bg-warning" id="divSaudacao">
        <h1 id="saudacao">Olá <?php echo $_SESSION["nome"]; ?>!</h1>
    </div>

    <!--Foto e Nome-->
    <div class="container-fluid" id="divPerfil">
        <?php echo "<img id='imgPerfil' src=" . $_SESSION["localImg"] . " alt='imagem do perfil'>" ?>
        <h2 id="nomePerfil"><?php echo $_SESSION["nome"] . " " . $_SESSION["sobrenome"]; ?></h2>
        <p id="bioPerfil"><i><?php echo $_SESSION["bio"]; ?></i></p>
        <p id="editarPerfil">editar perfil ▼</p>
        <div id="formEditar">
            <form id="formEditarPerfil" enctype="multipart/form-data" action="alterarPerfil.php" method="POST">
                <label class="form-label item-formulario" for="imgEditar">Imagem</label>
                <input class="form-control item-formulario" type="file" id="imgEditar" name="img">
                <label class="form-label item-formulario" for="bioEditar">Biografia</label>
                <textarea class="form-control item-formulario" name="biografia" id="bioEditar" cols="30" rows="2"></textarea>
                <button type="submit" class="btn btn-warning item-formulario" id="btnForm" name="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!--Atividades-->
    <div class="container-fluid">
        <div id="divFeed" class="container bg-dark text-light">
            <div class="row">
                <div class="col">
                    <h2 style="text-align: center;line-height: 75vh;">Aqui aparecerão suas atividades!</h2>
                </div>
            </div>
        </div>
    </div>

    <!--Rodapé-->
    <div id="divRodape" class="container-fluid bg-dark">
        <p id="textoRodape" class="text-light">Todos os direitos reservados. <strong>Tongue</strong> © 2021. <a href="tcc-documentacao.html">Sobre o TCC</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/perfilScript.js"></script>
  </body>
</html>