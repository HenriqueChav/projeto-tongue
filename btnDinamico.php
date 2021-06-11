<?php // Sistema que muda o botão de "login" para "perfil" se o usuário já estiver logado.

include "startSession.php";
$retornoAJAX = '';

if ($_SESSION["logado"]) {
    //Botão Perfil (Imagem)
    $retornoAJAX = "<a href='perfil.php'><img src=". $_SESSION["localImg"] ." id='imgPerfil'></a>";
} else {
    //Botão Login
    $retornoAJAX = "<a href='login.html'><button class='btn btn-warning'>Login</button></a>";
}

echo $retornoAJAX;

?>