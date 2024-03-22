<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/transtornos.css">
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Área sobre transtornos</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            <span class="nome-empresa">POSITIVE MIND</span>
        </div>
        <span class="nav-usuario">Bem-vindo (a),
            <?php echo $_SESSION['usuario_nome']; ?>
        </span>
        <a href="comunidade.php" class="nav-home">Comunidade</a>
    </header>
    <h2>Sobre os Transtornos Psicológicos</h2>

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

    <h3>
        <span class="first-part">Você acha que precisa de ajuda? </span>
        <a href="areapsicologos.php" class="second-part">Clique aqui para buscar ajuda.</a>
    </h3>


    <div class="chat-container">
        <div id="chat-display" class="chat-display"></div>
        <input type="text" id="user-input" class="user-input" placeholder="Type your message...">
        <button onclick="sendMessage()" class="send-button">Send</button>
    </div>

    <script src="script.js"></script>

    <footer class="main_footer container">

        <div class="content">
        
            <div class="colfooter">

                <h4 class="titleFooter"> Menu</h4>

                <ul>

                    <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                    <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                    <li><a href="fale_conosco1" title="Fale Conosco">Fale Conosco</a></li>

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