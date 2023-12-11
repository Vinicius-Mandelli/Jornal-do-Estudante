<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Ainda não pode acessar essa página, pois não foi efetuado o cadastro.<p><a href=\"cadastro.html\">Cadastrar</a></p>");
}

?>