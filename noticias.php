<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/noticias.css">
    <title>Jornal do Estudante/Notícias</title>
</head>
<body>
    <header class="cabeçalho">

        <nav class="navigation">
                <ul class="nav-menu">
                    <li><a class="nav-item" href="noticias.php">Notícias</a></li>
                        <li><a class="nav-item" href="https://www.google.com">Artigos</a></li>
                        <li><a class="nav-item" href="https://www.google.com">Dicas</a></li>
                    <li><a class="nav-item" href="https://www.google.com">Colaborações</a></li>
                </ul>
        </nav>

        <nav class="navegacao1">
            <a class="nav" href="noticias.php">Notícias</a>
                <a class="nav" href="youtube.com">Artigos</a>
        </nav>

            <a href="noticias.php"><img class="logo" src="IMG/logo.svg" alt="logo - Jornal do Estudante"></a>

        <nav class="navegacao2">
            <a class="nav" href="youtube.com">Dicas</a>
                <a class="nav" href="youtube.com">Colaborações</a>
        </nav>

            <div class="menu">
                <span class="bar"></span>
                    <span class="bar"></span>
                        <span class="bar"></span>
            </div>
    </header>

    <main>
        <div class="php">
            <div class="login">
                <h1>Bem vindo, <?php echo $_SESSION['nome']; ?></h1>
                <a href="logout.php">Sair</a>
            </div>
        </div>

        <div class="titulo">
            <h1>2023:</h1>
        </div>

        <hr>

        <div class="container">
            <a class="link-image" href="noticia_um.html"><img class="enem-dia" src="IMG/enem-dia.svg" alt="enem-foto"></a>
                <div class="info">
                    <a class="titulo-enem-dia" href="noticia_um.html">Primeiro dia de provas do Enem 2023 reúne estudantes de todas as regiões do Brasil.</a>
                    <p class="horario">01/11/2023</p>
                </div>
        </div>

            <hr>

        <div class="container">
            <a class="link-image" href="noticia_dois.html"><img class="enem-dia" src="IMG/estudantes.svg" alt="enem-foto"></a>
                <div class="info">
                    <a class="titulo-enem-dia" href="noticia_dois.html">De acordo com o IBGE, um quinto dos jovens no país não está envolvido em atividades educacionais ou profissionais.</a>
                    <p class="horario">13/12/2023</p>
                </div>
        </div>

            <hr>
    </main>

    <footer class="rodape">
        <img class="rodape-imagem" src="IMG/FOTO FOOTER.svg" alt="jornal do estudante">
    </footer>

    <script src="JS/noticias.js"></script>
</body>
</html>