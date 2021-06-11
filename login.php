<?php // Sistema de login.
    include "conexao.php";
    session_start();
    $_SESSION["logado"] = false;

    $respostaAJAX = '';

    $email = addslashes($_POST["email"]);
    $senha = addslashes($_POST["senha"]);

    $comando = $conexao -> prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
    $comando -> bindParam(1, $email);
    $comando -> bindParam(2, $senha);
    $comando -> execute();
    $resultado = $comando -> fetch(PDO::FETCH_ASSOC);

    if (!empty($email) && !empty($senha)) {
        if ($comando->rowCount() > 0) {      
            $_SESSION["logado"] = true;    
            $_SESSION["nome"] = $resultado["nome"];
            $_SESSION["sobrenome"] = $resultado["sobrenome"];
            $_SESSION["email"] = $resultado["email"];
            $_SESSION["nivelIngles"] = $resultado["nivel_ingles"];
            $_SESSION["localImg"] = $resultado["local_img"];
            $_SESSION["bio"] = $resultado["biografia"];
            $_SESSION["acimaLimite"] = false; 

            if ($resultado["email"] == "admin@admin" && $resultado["senha"] == "masterAdmin987") { // verificando se o usuário é o admin
                $_SESSION["admin"] = true;
                $respostaAJAX = 'Logado como administrador. <script>window.location.replace("index.php")</script>';               
            } else {
                $_SESSION["admin"] = false;
                $respostaAJAX = 'Logado com sucesso! <script>window.location.replace("index.php")</script>';
            }

        } else {
            $respostaAJAX = 'E-mail ou senha errado(s)!';
        }  
    } else {
        $respostaAJAX = 'Preencha todos os campos.';
    }

    echo $respostaAJAX;

?>