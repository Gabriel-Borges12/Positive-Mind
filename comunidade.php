<?php
// Inicialize o array $comments manualmente com alguns comentários
$comments = [
    (object) [
        'name' => 'João Silva',
        'comment' => 'Ótimo post! Muito útil.',
        'created_at' => '2024-09-10 12:30:00'
    ],
    (object) [
        'name' => 'Maria Oliveira',
        'comment' => 'Obrigado por compartilhar essa informação.',
        'created_at' => '2024-09-11 15:45:00'
    ],
];

// Verifique se o formulário foi enviado e adicione o comentário à array $comments
if (isset($_POST['post_comment'])) {
    $new_comment = (object) [
        'name' => $_POST['usuario_nome'],
        'comment' => $_POST['comment'],
        'created_at' => date('Y-m-d H:i:s') // Adiciona data e hora atual
    ];

    // Adiciona o novo comentário à array $comments
    $comments[] = $new_comment;
}
?>

<?php
session_start();
include 'conexao.php';

// Verifica se o usuário já está logado
if (isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"] == true) {

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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Início</title>
</head>

<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <a href="home.php">
                <img src="img/logopadrao.png" alt="Logo" class="logo">
            </a>
            <!-- <span class="nome-empresa">POSITIVE MIND</span> -->
        </div>
        <span class="nav-usuario">Bem-vindo (a), <?php echo $_SESSION['usuario_nome']; ?></span>

        <a href="sobreEmpresa.php" class="nav-home">Quem somos?</a>
        <a href="./logout.php" class="nav-home">Sair</a>
    </header>


    <script>(function (q, u, i, z, r) { z = q.createElement(u), r = q.getElementsByTagName(u)[0]; z.async = 1; z.src = i; r.parentNode.insertBefore(z, r); })(document, 'script', 'https://pt.quizur.com/js/embedder.js');</script>
    <ins class="quizurembed"
        data-id="trivia/mito-ou-verdade-teste-seus-conhecimentos-sobre-saode-e-bem-estar-1m94z"></ins>
    <div style="text-align:center; margin-top:20px"> </div>



    <footer class="main_footer container">

        <div class="content">

            <div class="colfooter">

                <h4 class="titleFooter"> Menu</h4>

                <ul>

                    <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
                    <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
                    <li><a href="fale_conosco.php" title="Fale Conosco">Fale Conosco</a></li>

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