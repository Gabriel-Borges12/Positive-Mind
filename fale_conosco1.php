<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="css/fale1.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>

<header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">

        </div>
        <span class="nav-usuario">Bem-vindo (a),
            <?php echo $_SESSION['usuario_nome']; ?>
        </span>

        <a href="comunidade.php" class="nav-home">Comunidade</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </header>



    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conecta ao banco de dados
        $conexao = new mysqli("localhost", "root", "", "bd_positivemind");

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        // Obtém os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // Insere os dados no banco de dados
        $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Mensagem enviada com sucesso!",
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location.href = "fale_conosco1.php";
                });
                </script>';
        } else {
            // Erro ao enviar a mensagem, exibe alerta usando SweetAlert
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Erro ao enviar a mensagem",
                        text: "' . $conexao->error . '",
                        showConfirmButton: true
                    });
                    </script>';
        }
        

        // Fecha a conexão
        $conexao->close();
    }
    ?>

<div class="container2">

      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">FALE CONOSCO</h3>
          <p class="text">
          Bem-vindo à nossa página de Fale Conosco! Queremos ouvir você. 
          Nossa equipe está aqui para ajudar e garantir
            que sua experiência conosco seja a melhor possível.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/local.png" class="icon" alt="" />
              <p>Caçapava, SÃO PAULO</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>positivemindhealther@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/tele.png" class="icon" alt="" />
              <p>(12) 99999-9999</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
         
              <a href="https://twitter.com/PositiveMindBR">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/positive_mindbrasil/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
    <span class="circle one"></span>
    <span class="circle two"></span>

    <form action="fale_conosco1.php" method="post">
        <h3 class="title">Entre em contato</h3>
        <div class="input-container">
            <input placeholder="Nome" type="text" name="nome" class="input" required />
            <!-- <label for="nome">Nome</label> -->
            
        </div>
        <div class="input-container">
            <input placeholder="E-mail" type="email" name="email" class="input" required />
            <!-- <label for="email">E-mail</label> -->
            
        </div>

        <div class="input-container textarea">
            <textarea placeholder="Mensagem" name="mensagem" class="input" required></textarea>
            <!-- <label for="mensagem">Mensagem</label> -->
            
        </div>
        <input type="submit" value="Enviar" class="btn" />
    </form>
</div>
      </div>
    </div>

    <footer class="main_footer container">

<div class="content">

    <div class="colfooter">

        <h4 class="titleFooter"> Menu</h4>

        <ul>

            <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
            <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
            <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
            <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>

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