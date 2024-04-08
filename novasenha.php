<?php
session_start();
include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/redefinirasenha.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href=" ./img/icone-cerebro.png">
    <title>Redefinir senha</title>
</head>

<body>
    <div class="main">
        <div class="lado-dir">
            <div class="logo-responsiva">
            </div>
            <div class="container">
                <form action="processar_redefinir.php" id="cadastro-form" method="post">
                    <h1 id="logintitulo">Esqueceu sua senha?</h1>
                    <p>Para redefinir sua senha, digite o nome de</p>
                    <p> usuário que você usa para fazer login no </p>
                    <p> Positive Mind, e crie uma senha nova.</p>
                    <br><br>
                    <img id="img-user" src="img/user.png">
                    <input type="email" name="usuario_email" class="formzao" placeholder="Seu email">
                    <br><br>
                    <img id="img-senha" src="img/senha.png">
                    <input type="password" class="formzao" name="usuario_senha" placeholder="Senha" id="senha">
                    <i class="fa-regular fa-eye" id="show-password"></i>
                    <br><br>
                    <input type="submit" value="Salvar nova senha" id="botao-salvar-senha">
                    <br><br>
                    <a class="vparalogin" href="login.php">Voltar ao login</a>

                    <script>
                        const senhaInput = document.getElementById("senha");
                        const showPasswordIcon = document.getElementById("show-password");

                        showPasswordIcon.addEventListener("click", () => {
                            if (senhaInput.type === "password") {
                                senhaInput.type = "text";
                            } else {
                                senhaInput.type = "password";
                            }
                        });     
                    </script>
                </form>
            </div>
        </div>
    </div>
</body>

</html>