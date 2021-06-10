<?php // Sistema de criação de contas.
    include 'conexao.php';
    
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS); // $_POST["nome"]
    $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_SPECIAL_CHARS); // $_POST["sobrenome"]
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS); // $_POST["email"]
    $nascimento = filter_input(INPUT_POST, "nascimento", FILTER_SANITIZE_SPECIAL_CHARS); // $_POST["nascimento"]
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS); // $_POST["senha"]
    
    $comando = $conexao -> prepare("INSERT INTO usuario (nome, sobrenome, nascimento, email, senha) VALUES (?, ?, ?, ?, ?)");
    $comando -> bindParam(1, $nome);
    $comando -> bindParam(2, $sobrenome);
    $comando -> bindParam(3, $nascimento);
    $comando -> bindParam(4, $email);
    $comando -> bindParam(5, $senha);
    $comando -> execute();

    if (!(empty($nome) || empty($sobrenome) || empty($email) || empty($nascimento) || empty($senha))) {
        if ($comando->rowCount() > 0) {
        echo 'Conta criada com sucesso!';
        } else {
        echo 'Conta não criada.';
        }
    } else {
        echo 'Preencha todos os campos.';
    }


?>