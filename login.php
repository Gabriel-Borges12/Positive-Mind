<?php
// Inicia a sessão


// Se o formulário de login for enviado, você verifica as credenciais e, se forem válidas, define $_SESSION["usuario_logado"] como true e redireciona para a página logada.
// Se as credenciais não forem válidas, você exibe uma mensagem de erro.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Positive Mind</title>
  <link rel="stylesheet" href="./css/login.css" />
  <link rel="shortcut icon" type="imagex/png" href="./img/mind-logo.ico">
  <link rel="icon" href=" ./img/icone-cerebro.png">
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="processar_login.php" method="POST" autocomplete="off" class="sign-in-form">
            <div class="logo">
              <img src="./img/logo-site.png" alt="easyclass" />
              <h4>Positive Mind</h4>
            </div>

            <div class="heading">
              <h2>Bem-vindo!</h2>
              <h6>Não tem uma conta?</h6>
              <a href="#" class="toggle">Inscreva-se</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" name="usuario_nome" class="input-field" autocomplete="off" required />
                <label>Nome de Usuário</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="usuario_senha" minlength="4" class="input-field" autocomplete="off" required />
                <label>Senha</label>
              </div>

              <input type="hidden" name="login" value="1">
              <input type="submit" value="LOGIN" class="sign-btn" />
              <!-- Exibir mensagem de erro se houver -->
              <?php if (isset($erro_login))
                echo "<p class='error'>$erro_login</p>"; ?>
              <!-- ... (restante do formulário de login) -->

              <p class="text">
                Esqueceu sua senha?
                <a href="redefinirsenha.php">Obtenha ajuda</a> para redefinir sua senha
              </p>
            </div>
          </form>

          <form action="processar_cadastro.php" method="POST" autocomplete="off" class="sign-up-form">
            <div class="logo">
              <img src="./img/logo-site.png" alt="easyclass" />
              <h4>Positive Mind</h4>
            </div>

            <div class="heading">
              <h2>Cadastre-se</h2>
              <h6>Inscreva-se para começar a sua experiência na Positive Mind.</h6>
              <h6>Já possui uma conta?</h6>
              <a href="#" class="toggle">Login</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" name="usuario_nome" class="input-field" autocomplete="off" required />
                <label>Nome de Usuário</label>
              </div>

              <div class="input-wrap">
                <input type="email" name="usuario_email" class="input-field" autocomplete="off" required />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="usuario_senha" minlength="4" class="input-field" autocomplete="off" required />
                <label>Senha</label>
              </div>

              <input type="hidden" name="cadastro" value="1">
              <input type="submit" value="INSCREVER-SE" class="sign-btn" />
              <!-- Exibir mensagem de erro se houver -->
              <?php if (isset($erro_cadastro))
                echo "<p class='error'>$erro_cadastro</p>"; ?>

              <p class="text">
                Ao me inscrever na Positive Mind, concordo com os
                <a href="#">Termos de Serviço</a> e
                <a href="#">Política de Privacidade</a>
              </p>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="./img/page1.png" class="image img-1 show" alt="" />
            <img src="./img/page2.png" class="image img-2" alt="" />
            <img src="./img/page3.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Priorize sua saúde mental</h2>
                <h2>Você merece se sentir bem</h2>
                <h2>Estamos juntos nessa jornada</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript file -->

  <script src="login.js"></script>


</body>

</html>