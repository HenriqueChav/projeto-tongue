<?php
include 'conexao.php';

$titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS); 
$descIngles = filter_input(INPUT_POST, "descIngles", FILTER_SANITIZE_SPECIAL_CHARS); 
$descPort = filter_input(INPUT_POST, "descPort", FILTER_SANITIZE_SPECIAL_CHARS); 
$link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_SPECIAL_CHARS); 
$capa = $_FILES['imgCapa'];
$capaNome = $capa["name"];
$capaNomeTmp = $capa["tmp_name"];

if (!empty($titulo) && !empty($descIngles) && !empty($descPort) && !empty($link) && !empty($capa)) { // Verificando se há campos vazios.

    $capaArrNome = explode(".", $capaNome);
    $capaExt = strtolower(end($capaArrNome));

    $capaNomeSalvo = md5($capaNome) . "." .$capaExt;
    $destino = "imagensCapa/$capaNomeSalvo"; 
    move_uploaded_file($capaNomeTmp, $destino);

    $comando = $conexao -> prepare("INSERT INTO livro (titulo, desc_ingles, desc_port, capa, link) VALUES (?, ?, ?, ?, ?)");
    $comando -> bindParam(1, $titulo);
    $comando -> bindParam(2, $descIngles);
    $comando -> bindParam(3, $descPort);
    $comando -> bindParam(4, $destino);
    $comando -> bindParam(5, $link);
    $comando -> execute();

    header("Location: editar.php");

} else {
    header("Location: editar.php?erro=1");
}

?>