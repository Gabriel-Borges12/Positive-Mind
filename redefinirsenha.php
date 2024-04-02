<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/redefinirsenha.css">
    <link rel="icon" href=" ./img/icone-cerebro.png">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Redefinição de Senha</h2>
                    <p class="text-center">Insira seu endereço de e-mail. Um link para redefinir sua senha será enviado para este e-mail.</p>
                    <!-- php aqui -->
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Insira seu endereço de e-mail" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>