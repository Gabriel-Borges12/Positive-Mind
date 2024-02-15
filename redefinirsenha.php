<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class="container">

        <div class="login-form">
            <div class="title">Bem Vindo!</div>
            <form action="#">
                <div class="input-box">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" class="formzao" placeholder="Seu email">
                    <br><br>
                
                    <input type="password" class="formzao" name="senha" placeholder="Senha" id="senha">
                    <i class="fa-regular fa-eye" id="show-password"></i>
                    <br><br>
                    <input type="submit" value="Salvar nova senha" id="botao-salvar-senha">
                    <br><br>
                    <a class="vparalogin" href="index.php">Voltar ao login</a>

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

        <div class="login-img">
            <img src="img/logoverdefundo.jpeg" width="100%">
        </div>
    </div>
</body>
</html>