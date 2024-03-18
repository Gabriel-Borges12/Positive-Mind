<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/comunidade2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Comunidade</title>
</head>
<body>

<header class="navbar">
    <div class="estrutura-logo">
        <img src="img/logopadrao.png" alt="Logo" class="logo">
    </div>
    <span class="nav-usuario">Bem-vindo (a),<?php echo $nome ?></span>
    <div class="nav-links">
        <a href="home.php" class="nav-home">Início</a>
        <a href="sobreEmpresa.php" class="nav-home">Quem somos?</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </div>
</header>

<div class="conteudo">
    <h1>Sinta-se livre para relatar suas experiências aqui.</h1>
    <div class="linha1"></div>
    <div class="perfil-usuario">
        <img src="img/desenvolvedorLeonardo.jpg" alt="Foto de Perfil">
        <span>Nome do Usuário</span>
    </div>
    <div class="imagem-com">
        <img src="img/volei.png" alt="Outra Imagem">
        <img src="img/jogo.png" alt="Outra Imagem">
    </div>
    <div class="comentario">
        <p>Eu não aguento mais não saber jogar vôlei e estou me sentindo muito ansioso com isso....</p>
    </div>
    <a href="#" class="ver-comentarios">Ver Comentários</a>
    <div class="linha"></div>
    <div class="perfil-usuario">
        <img src="img/productoOwnerBorges.jpeg" alt="Foto de Perfil">
        <span>Nome do Usuário</span>
    </div>
    <div class="comentario">
        <p>Estou me sentindo meio pra baixo esses dias por não conseguir achar um erro no meu código, 
            creio que vou ter que fazer uma gambiarra nisso...</p>
    </div>
    <a href="#" class="adicionar-comentarios">Adicionar Comentário</a>
</div>

<div class="add-comentario">
    <a href="#" class="botao-adicionar">
    <i class="icon-plus">&#43;</i>
    </a>
</div>

<footer class="main_footer container">
    <div class="content">
        <div class="colfooter">
            <h4 class="titleFooter">Menu</h4>
            <ul>
                <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
                <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                <li><a href="fale_conosco1" title="Fale Conosco">Fale Conosco</a></li>
            </ul>
        </div><!--Col Footer 1-->

        <div class="colfooter">
            <h4 class="titleFooter">Contato</h4>
            <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
            <p><i class="icon icon-phone"></i> 21 90000-0000</p>
            <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>
        </div><!--Col Footer 2-->

        <div class="colfooter">
            <h4 class="titleFooter">Redes Sociais</h4>
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
