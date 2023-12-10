<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Ainda não pode acessar essa página, pois não foi efetuado o login.<p><a href=\"login.php\">Entrar</a></p>");
}

?>