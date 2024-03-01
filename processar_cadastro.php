<?php

session_start();
include 'conexao.php';

// Verifica se o formulário de cadastro foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados (substitua com suas próprias credenciais)
    $conexao = new mysqli("localhost", "root", "", "bd_positivemind");

    // Verifica se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Limpa os dados do formulário para evitar SQL injection
    $usuario_nome = $conexao->real_escape_string($_POST['usuario_nome']);
    $usuario_email = $conexao->real_escape_string($_POST['usuario_email']);
    $usuario_senha = $conexao->real_escape_string($_POST['usuario_senha']);

    // Aplica o hash à senha
    $hash_senha = password_hash($usuario_senha, PASSWORD_DEFAULT);

    // Consulta SQL para inserir um novo usuário
    $sql = "INSERT INTO usuarios (usuario_nome, usuario_email, usuario_senha) VALUES ('$usuario_nome', '$usuario_email', '$hash_senha')";

    if ($conexao->query($sql) === TRUE) {
        // Redireciona para a página após o cadastro bem-sucedido
        header("Location: login.php");
        exit();
    } else {
        $erro_cadastro = "Erro ao cadastrar usuário: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}

?>