<?php // Conexão com banco de dados.

    $servidor = 'localhost';
    $bco = 'tongue';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$bco", "$usuario", "$senha");
        $conexao -> exec('set names utf8');
    } catch (PDOException $erro) {
        echo 'Erro na conexão: ' . $erro -> getMessage();
    }

?>