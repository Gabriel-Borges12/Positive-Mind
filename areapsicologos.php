<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/areapsicologos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script type="text/javascript" src="main.js"></script>
    <title>Área sobre Psicólogos</title>
</head>
<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
        </div>
        <span class="nav-usuario">Bem-vindo (a)</span>
        <a href="index.php" class="nav-home">Inicio</a>
        <a href="comunidade.php" class="nav-home">Comunidade</a>
        <a href="" class="nav-home">Sair</a>
    </header>

    <p class="bem-vindo">Seja bem-vindo à área dos psicólogos!</p>

    <p class="informacao">Você sabe qual a função de um psicólogo?</p>

    <div class="container">
        <p class="informacao" onclick="mostrarInformacao()">clique aqui</p>
        <div id="conteudo" style="display: none;">
            <p>Um psicólogo é um profissional da saúde mental que estuda o comportamento humano e os processos mentais. Ele utiliza diversas técnicas e abordagens terapêuticas para ajudar as pessoas a lidar com problemas emocionais, mentais e comportamentais.</p>
        </div>
    </div>

    <img src="img/logoverdefundo.jpeg" class="imagem">
    
    <div class="container-icons">
        <img src="./img/icon pessoa.jpg" alt="Ícone 1">
        <img src="./img/icon pessoa.jpg" alt="Ícone 2">
        <img src="./img/icon pessoa.jpg" alt="Ícone 3">
        <img src="./img/icon pessoa.jpg" alt="Ícone 4">
    </div>
</body>
</html>

