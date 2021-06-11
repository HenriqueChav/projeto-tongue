<?php
    session_start();
    
    //Página apenas para mostrar as informações da sessão para o desenvolvedor.
    echo session_id();
    echo $_SESSION["logado"]."<br>";
    echo $_SESSION["admin"]."<br>";
    echo $_SESSION["nome"]."<br>";
    echo $_SESSION["sobrenome"]."<br>";
    echo $_SESSION["email"]."<br>";
    echo $_SESSION["localImg"]."<br>";
    echo $_SESSION["nivelIngles"]."<br>";
    echo $_SESSION["bio"]."<br>";
    echo $_SESSION["acimaLimite"];

?>