<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba o email e a nova senha do formulário
    $usuario_email = $_POST['usuario_email'];
    $usuario_senha = $_POST['usuario_senha'];

    // Criptografe a nova senha
    $hashedPassword = password_hash($usuario_senha, PASSWORD_DEFAULT);

    // Execute uma consulta para atualizar a senha criptografada
    $sql = "UPDATE usuarios SET usuario_senha = ? WHERE usuario_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $usuario_email);

    if ($stmt->execute()) {
        echo '<script>alert("Senha redefinida com sucesso!");</script>';
        echo '<script>
                setTimeout(function(){
                    window.location.href = "login.php";
                }, 1000); 
              </script>';
    } else {
        echo "Erro ao redefinir a senha: " . $conn->error;
    }

    // Feche a instrução preparada
    $stmt->close();

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>