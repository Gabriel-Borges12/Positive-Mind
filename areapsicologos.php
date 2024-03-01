<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/areaPsicologo.css">
    <script type="text/javascript" src="main.js"></script>
    <title>Área sobre Psicólogos</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
        </div>
        <span class="nav-usuario">Bem-vindo (a)</span>
        <div id="links">
            <a href="index.php" class="nav-home">Inicio</a>
            <a href="comunidade.php" class="nav-home">Comunidade</a>
            <a href="" class="nav-home">Sair</a>
        </div>
    </header>
    <div class="container1">
        <img src="img/logoverdefundo.jpeg" class="imagem">

        <div class="paragrafos">
            <div id="align">
                <img id="cerebro" src="img/icone-cerebro.png">
                <h2 id="bem-vindo">Seja bem-vindo a área dos psicólogos!</h2>
            </div>

            <h3 id="funcao" class="informacao" onclick="mostrarInformacao()">Você sabe qual a função de um psicólogo?
            </h3>
        </div>
    </div>
    <div class="container">
        <div id="conteudo" style="display: none;">
            <p>Um psicólogo é um profissional da saúde mental que estuda o comportamento humano e os processos mentais.
                Ele utiliza diversas técnicas e abordagens terapêuticas para ajudar as pessoas a lidar com problemas
                emocionais, mentais e comportamentais.</p>
        </div>
    </div>
    <div id="container2">
        <h2 id="proftext">Profissionais de saúde mental na região:</h2>
        <div class="container-icons">
        <img src="./img/icon_pessoa.png" alt="Ícone 1" class="iconpsic">
        <img src="./img/icon_pessoa.png" alt="Ícone 2" class="iconpsic">
        <img src="./img/icon_pessoa.png" alt="Ícone 3" class="iconpsic">
        <img src="./img/icon_pessoa.png" alt="Ícone 4" class="iconpsic">
    </div>
    </div>
    </div>
</body>

</html>