<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['usuario_nome'];
    $senha = $_POST['usuario_senha'];


    $sql = "SELECT * FROM usuarios WHERE usuario_nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $linha = $resultado->fetch_assoc();
        $senha_bd = $linha['usuario_senha'];

        if (password_verify($senha, $senha_bd)) {
            $_SESSION['usuario_nome'] = $linha['usuario_nome'];
            $_SESSION['usuario_logado'] = true;
            $_SESSION['usuario_id'] = $linha['usuario_id'];
            $_SESSION['usuario_nome'] = $linha['usuario_'];
            $_SESSION['usuario_senha'] = $linha['usuario_senha'];
            header('Location: home.php');
            exit();
        }
    }

    // Se a autenticação falhar, redirecione de volta para a página de login
    header('Location: login.php');
    exit();
}
?>