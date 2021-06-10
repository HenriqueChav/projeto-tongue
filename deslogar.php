<?php
include "conexao.php";
include "startSession.php";

session_destroy();
header('Location: index.html');
