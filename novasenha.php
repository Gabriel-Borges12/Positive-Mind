<?php
session_start();
include 'conexao.php';

$nome = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/redefinirsenha.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Definir Nova Senha</h2>
                    <!-- php aqui -->
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Criar nova senha" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmar senha" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Definir">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>