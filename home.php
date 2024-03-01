<?php
session_start();
include 'conexao.php';

// $nome = $_SESSION['usuario_nome']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Início</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            <!-- <span class="nome-empresa">POSITIVE MIND</span> -->
        </div>
        <span class="nav-usuario">Bem-vindo (a),<?php echo $nome ?></span>

        <a href="comunidade.php" class="nav-home">Comunidade</a>
        <a href="sobreEmpresa.php" class="nav-home">Quem somos?</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </header>

    <div class="banner">
        <img src="img/banner.png">
    </div>

    <div class="frasetrocando" style="display: inline_block">
        <h3 id="animacao-aqui">Pode parecer que você está sozinho, mas isso não é verdade.</h3>
    </div>

    <script>
        function typeWrite(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach((letra, i) => {
                setTimeout(() => elemento.innerHTML += letra, 75 * i)
            });
        }

        const titulo = document.querySelector('h3');
        typeWrite(titulo);
    </script>

    <div class="conteudo">
        <h2 id="recursos"> Recursos</h2>
        <p id="texto-recursos"> Utilize esses recursos a seu favor.</p>
        <div class="linha"></div>
    </div>

    <div class="opcoes">
        <div class="psicologos">
            <div class="icone-botao">
                <img class="icones" src="img/iconpsicologo.png">
                <button href="#" class="button-grid">Acessar</button>
            </div>
            <div class="grid-areas">
                <h3> Psicólogos</h3>
                <p>Encontre aqui psicólogos para se consultar de maneira rápida e eficiente.</p>
            </div>
        </div>
        <div class="comunidade">
            <div class="icone-botao">
                <img class="icones" src="img/iconrelaxar.png">
                <button class="button-grid">Acessar</button>
            </div>
            <div class="grid-areas">
                <h3>Comunidade</h3>
                <p>Converse e relate com outras pessoas suas experiências.</p>
            </div>
        </div>
        <div class="motivacao">
            <div class="icone-botao">
                <img class="icones" src="img/iconmotivation.png">
                <button class="button-grid">Acessar</button>
            </div>
            <div class="grid-areas">
                <h3>Motivação do dia</h3>
                <p>Frases diárias para aumentar o astral.</p>
            </div>
        </div>
        <div class="sobre">
            <div class="icone-botao">
                <img class="icones" src="img/icontranstornomental.jpg">
                <button class="button-grid">Acessar</button>
            </div>
            <div class="grid-areas">
                <h3>Sobre</h3>
                <p>Entenda mais sobre os transtornos mentais.</p>
            </div>
        </div>
    </div>

    <div class="custom-shape-divider-bottom-1683068753">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>

    <footer class="main_footer container">

        <div class="content">

            <div class="colfooter">

                <h4 class="titleFooter"> Menu</h4>

                <ul>

                    <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                    <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                    <li><a href="fale_conosco1.php" title="Fale Conosco">Fale Conosco</a></li>

                </ul>

            </div><!--Col Footer 1-->

            <div class="colfooter">

                <h4 class="titleFooter"> Contato</h4>
                <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
                <p><i class="icon icon-phone"></i> 21 90000-0000</p>
                <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>

            </div><!--Col Footer 2-->

            <div class="colfooter">

                <h4 class="titleFooter"> Redes Sociais</h4>

                <a href="#" class="botao"><span> <i class="icon icon-facebook">Início</i> </span></a>
                <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span>
                        <i class="icon icon-instagram"></i> </span></a>
                <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span> <i
                            class="icon icon-twitter"></i> </span></a>
                <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg"
                    class="botao">Gmail<span> <i class="icon icon-pinterest"></i> </span></a>

            </div><!--Col Footer 3-->

            <div class="clear"></div>

        </div><!--Contant-->

        <div class="main_footer_copy">

            <p class="m-b-footer"> Positive Mind - 2024, todos os direitos reservados.</p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="#" title="Healther">Healther</a>
            </p>

        </div>
    </footer>

</body>

</html>