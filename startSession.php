<?php // Início de sessão para ser incluido em cada página.
session_start();
if (!isset($_SESSION["logado"])) {
    $_SESSION["logado"] = false;
    $_SESSION["admin"] = false;
}
?>