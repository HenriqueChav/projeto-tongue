<?php // Sistema para edição de perfil.
include_once 'conexao.php';
include_once 'startSession.php';

// Declaração de variáveis importantes.
$email = $_SESSION["email"];
$bio = $_POST["biografia"];
$img = $_FILES["img"];
$imgNome = $img['name'];
$imgNomeTmp = $img['tmp_name'];
$imgErro = $img["error"];
$imgTamanho = $img["size"];
$extPermitidas = array('jpg', 'jpeg', 'png');

$retornoAjax = '';

// Guardando a extensão do arquivo. *pesquisar sobre pathinfo()
$imgArrNome = explode(".", $imgNome);
$imgExt = strtolower(end($imgArrNome));

// Código em si.
if (isset($_POST["submit"])) {

    if (!empty(bio)) { // Se o campo 'bio' estiver vazio, não fazer nada.
        $cmd = $conexao -> prepare("UPDATE usuario SET biografia = ? WHERE email = ?");
        $cmd -> bindParam(1, $bio);
        $cmd -> bindParam(2, $email);
        $cmd -> execute();

        $_SESSION["bio"] = $bio;
    }

    if (in_array($imgExt, $extPermitidas)) { // Verificando se a extensão do arquivo é permitida.
        if ($imgErro === 0) { // Verificando se houveram erros no upload.
            if ($imgTamanho < 1000000) { // Verificando o tamanho do arquivo.
                $imgNomeSalvo = md5($imgNome) . "." .$imgExt; // Definindo nome do arquivo.
                $destino = "imagensPerfil/$imgNomeSalvo"; // Definindo localização do arquivo.
                move_uploaded_file($imgNomeTmp, $destino); // Movendo o arquivo.   
                
                // Salvando no banco de dados e na sessão.
                $comando = $conexao -> prepare("UPDATE usuario SET local_img = ? WHERE email = ?");
                $comando -> bindParam(1, $destino);
                $comando -> bindParam(2, $email);
                $comando -> execute();

                $_SESSION["localImg"] = $destino;

            } else {
                $_SESSION["acimaLimite"] = true;
            }
        }
    } 
}

header('Location: perfil.php');

?>