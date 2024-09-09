<?php
session_start();
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Redefinir Senha</title>
  <link rel="stylesheet" href="./css/redefinirasenha.css" />
  <link rel="shortcut icon" type="image/png" href="./img/mind-logo.ico">
  <link rel="icon" href="./img/icone-cerebro.png">
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="processar_redefinicao.php" method="POST" autocomplete="off" class="reset-form">
            <div class="logo">
              <img src="./img/logo-site.png" alt="Positive Mind" />
              <h4>Positive Mind</h4>
            </div>

            <div class="heading">
              <h2>Redefinir Senha</h2>
              <h6>Por favor, insira seu novo password abaixo.</h6>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="password" name="nova_senha" class="input-field" autocomplete="off" required />
                <label>Nova Senha</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="confirmar_senha" class="input-field" autocomplete="off" required />
                <label>Confirmar Senha</label>
              </div>

              <input type="hidden" name="redefinir" value="1">
              <input type="submit" value="REDEFINIR" class="sign-btn" />
              <!-- Exibir mensagem de erro se houver -->
              <?php if (isset($erro_redefinicao)) echo "<p class='error'>$erro_redefinicao</p>"; ?>
            </div>
          </form>

          <!-- Link de Voltar para a Página Anterior -->
          <div class="back-link">
            <p><a href="login.php">Voltar para a página de login</a></p>
          </div>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="./img/Forgot.png" class="image img-1 show" alt="" />
            <img src="./img/Secure.png" class="image img-2" alt="" />
            <img src="./img/fotoaaa.png" class="image img-3" alt="" />
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
