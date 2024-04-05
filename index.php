<?php
session_start();
include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Página Sobre</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            <!-- <span class="nome-empresa">POSITIVE MIND</span> -->
        </div>
        <div class="navSpace">
            <a href="sobreEmpresa.php" id="somosNos" class="nav-home">Quem somos?</a>
            <a href="login.php" class="nav-home">Entrar</a>
        </div>
    </header>

    <container>
        <div id="sobreBanner">
            <img id="bannerPrincipal" src="img/BannerPaginaIndex.png">
        </div>

        
        <div class="sobreSaude">
            <!-- <img id="cima" src="img/imagem2Sobre.png"> -->
            <h1 id="textoTitulo">Como está sua saúde mental?</h1>
            <p id="textoParagrafo">Já parou para pensar no assunto? Alguma vez refletiu se os seus pensamentos, ideias e
                sentimentos estão em harmonia? Sabe a diferença entre saúde mental e doença ou transtorno mental?</p>
            <!-- <img id="baixo" src="img/imagem1Sobre.png">
            <img id="parteBaixo" src="img/imagem5Sobre.png">
            <img id="parteBaixo2" src="img/imagem4Sobre.png"> -->
            <!-- <img id="cima1" src="img/imagem3Sobre.png"> -->
        </div>

        <div class="sobreTranstornos">
            <div class="linha"></div>
            <h2 id="textoTitulo2">Entenda mais sobre os transtornos mentais, se conecte!</h2>
            <div class="flex-conteudo">
                <div class="container-wrapper">
                    <div class="containerBloco">De acordo com a OMS, cerca de 10% da população mundial sofre com
                        transtornos
                        mentais.</div>
                    <div class="containerBloco">Na América Latina, quase 16 milhões de jovens entre 10 e 19 anos têm
                        algum
                        transtorno mental.</div>
                    <div class="containerBloco">Estresse, genética e nutrição são fatores que contribuem para
                        transtornos
                        mentais.</div>
                </div>
                <div class="imagemmulher">
                    <img id="mulherpensando" src="img/mocaPensante.png">
                </div>
            </div>
            <div class="recursosSite">
                <div class="linha"></div>
                <h3 id="textoRecursos">O desequilíbrio emocional facilita o surgimento de doenças mentais.</h3>
                <div class="quadradoFundo">
                    <p class="textoParagrafos">Com o nosso site, você consegue explorar nossa variedade de recursos,
                        incluindo
                        artigos educativos sobre
                        temas relevantes, dicas práticas para o dia a dia e ferramentas interativas para fortalecer sua
                        resiliência emocional.</p>

                    <!-- COLOCAR RECURSO QUE QUEBRA EM LINHA PERGUNTAR PRO PROF LUIS QUE SABE -->
                    <p class="textoParagrafos">Você está pronto para fazer isso?</p>
                </div>
                <div class="card">
                    <h1>Positive Mind é
                        <!-- Scroller Start -->

                        <div class="scroller">
                            <span>
                                Inovação<br />
                                Amor<br />
                                Saudável<br />
                                Relaxante
                            </span>
                        </div>

                        <!-- Scroller End -->
                    </h1>
                    <p class="note">
                        Estamos aqui para te ajudar! <a href="login.php">Entrar.</a><br /><br />
                        Está pronto?<br />
                        <a href="sobreEmpresa.php">Conheça nosso projeto!.</a>
                    </p>
                </div>
            </div>
        </div>
    </container>
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

            </div>
            <!--Col Footer 1-->

            <div class="colfooter">

                <h4 class="titleFooter"> Contato</h4>
                <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
                <p><i class="icon icon-phone"></i> 21 90000-0000</p>
                <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>

            </div>
            <!--Col Footer 2-->

            <div class="colfooter">

                <h4 class="titleFooter"> Redes Sociais</h4>

                <a href="#" class="botao"><span> <i class="icon icon-facebook">Início</i> </span></a>
                <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span>
                        <i class="icon icon-instagram"></i> </span></a>
                <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span> <i
                            class="icon icon-twitter"></i> </span></a>
                <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg"
                    class="botao">Gmail<span> <i class="icon icon-pinterest"></i> </span></a>

            </div>
            <!--Col Footer 3-->

            <div class="clear"></div>

        </div>
        <!--Contant-->

        <div class="main_footer_copy">

            <p class="m-b-footer"> Positive Mind - 2024, todos os direitos reservados.</p>
            <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="sobreEmpresa.php"
                    title="Healther">Healther</a>
            </p>

        </div>
    </footer>

</body>

</html>