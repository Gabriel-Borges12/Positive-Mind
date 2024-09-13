<?php
session_start();
include 'conexao.php';

// Verifica se o usuário já está logado
if(isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"] == true){

} else {
    header("location: index.php");
}

$nome = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="css/areaPsicologo.css">
    <script type="text/javascript" src="main.js"></script>
    <link rel="icon" href="./img/icone-cerebro.png">
    <title>Área sobre Psicólogos</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <a href="home.php">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            </a>
        </div>
        <span class="nav-usuario">Bem-vindo (a), <?php echo $nome ?></span>
        <div id="links">
            <a href="home.php" class="nav-home">Início</a>
            <a href="comunidade.php" class="nav-home">Quiz</a>
            <a href="./logout.php" class="nav-home">Sair</a>
        </div>
    </header>

    <div class="container1">
        <div class="paragrafos">
            <div id="align">
                <img id="cerebro" src="img/icone-cerebro.png">
                <h2 id="bem-vindo">Seja bem-vindo a área dos psicólogos!</h2>
            </div>
            <h3 id="funcao" class="informacao" onclick="mostrarInformacao()">Você sabe qual a função de um psicólogo?</h3>
            <div class="flex-content">
                <div id="conteudo" style="display: none;">
                    <p>Um psicólogo é um profissional da saúde mental que estuda o comportamento humano e os processos mentais. Ele utiliza diversas técnicas e abordagens terapêuticas para ajudar as pessoas a lidar com problemas emocionais, mentais e comportamentais.</p>
                </div>
                
            </div>
           
        </div>
    </div>

    <div id="container2">
        <h2 id="proftext">Profissionais de saúde mental na região:</h2>
        <div class="container-icons">
            <img src="./img/icon_pessoa.png" alt="Ícone 1" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 1" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 1" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 1" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 2" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 3" class="iconpsic">
            <img src="./img/icon_pessoa.png" alt="Ícone 4" class="iconpsic">
        </div>
    </div>
    <div class="container3">
        <h3>Localize os locais mais próximos de você:</h3>
        <div id="map" style="width: 800px; height: 700px;"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-23.1118, -45.7076], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20
        }).addTo(map);

        var markers = [
            {
                lat: -23.100515,
                lng: -45.704166,
                name: 'Bianca M. M. Benevenuti'
            },
            {
                lat: -23.104668,
                lng: -45.701073,
                name: 'Espaço Evoluir'
            },
            {
                lat: -23.1039771,
                lng: -45.707966,
                name: 'Psicólogo Albano Santos'
            },
            {
                lat: -23.104301,
                lng: -45.701374,
                name: 'Fonocenter - Taubaté e Caçapava'
            },
            {
                lat: -23.091623,
                lng:  -45.708935,
                name: 'Consultório de Psicologia'
            }
        ];

        markers.forEach(function (marker) {
            L.marker([marker.lat, marker.lng]).addTo(map)
                .bindPopup(marker.name);
        });
    </script>

    <footer class="main_footer container">
        <div class="content">
            <div class="colfooter">
                <h4 class="titleFooter">Menu</h4>
                <ul>
                    <li><a href="index.php" title="Página Inicial">Página Inicial</a></li>
                    <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                    <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                    <li><a href="fale_conosco1.php" title="Fale Conosco">Fale Conosco</a></li>
                </ul>
            </div>

            <div class="colfooter">
                <h4 class="titleFooter">Contato</h4>
                <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
                <p><i class="icon icon-phone"></i> 21 90000-0000</p>
                <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>
            </div>

            <div class="colfooter">
                <h4 class="titleFooter">Redes Sociais</h4>
                <a href="#" class="botao"><span><i class="icon icon-facebook">Início</i></span></a>
                <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span><i class="icon icon-instagram"></i></span></a>
                <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span><i class="icon icon-twitter"></i></span></a>
                <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg" class="botao">Gmail<span><i class="icon icon-pinterest"></i></span></a>
            </div>

            <div class="clear"></div>
        </div>

        <div class="main_footer_copy">
            <p class="m-b-footer">Positive Mind - 2024, todos os direitos reservados.</p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="#" title="Healther">Healther</a></p>
        </div>
    </footer>
</body>
</html>
