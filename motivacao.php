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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/motivacao.css">
    <script type="text/javascript" src="maotivacao.js"></script>
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Motivação</title>
</head>
<body>
    <header class="navbar">
        <div class="estrutura-logo">
        <a href="home.php">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            </a>
            <!-- <span class="nome-empresa">POSITIVE MIND</span> -->
        </div>
        <span class="nav-usuario">Bem-vindo (a), <?php echo $nome ?></span>

        <a href="comunidade.php" class="nav-home">Comunidade</a>
        <a href="sobreEmpresa.php" class="nav-home">Quem somos?</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </header>

    
        <div id="endireitar">
        <h1 class="frase-do-dia" id="frase-do-dia">Frase Motivadora:</h1>
    </div>
     <div class="container">   <!-- Container para as frases -->
        <div id="container-frases" class="container-frases"></div>
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

    <!-- JavaScript para exibir frases -->
    <script>
        // Array de frases
        var frases = [
            "Acredite em si mesmo e tudo será possível.",
            "O sucesso nasce do querer, da determinação e persistência.",
            "Se você traçar metas absurdamente altas e falhar, seu fracasso será muito melhor que o sucesso de todos.",
            "Não tenha medo da mudança. Coisas boas se vão para que melhores possam vir.",
            "A persistência é o caminho do êxito.",
            "Só existe um êxito: a capacidade de viver a vida do seu jeito."
        ];

        // Função para exibir uma frase aleatória
        function exibirFraseAleatoria() {
            var randomIndex = Math.floor(Math.random() * frases.length);
            var frase = frases[randomIndex];
            document.getElementById('container-frases').innerHTML = '<p>' + frase + '</p>';
        }

        // Chamando a função ao carregar a página
        exibirFraseAleatoria();
    </script>

</body>
</html>

