<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba o email do formulário
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];

    // Criptografe a nova senha
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Execute uma consulta para atualizar a senha criptografada
    $sql = "UPDATE usuarios SET usuario_senha = ? WHERE usuario_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        //header("Location: javascript:alert(\"Email enviado com sucesso!\");location.href=\"index.php\";");
        echo '<script>alert("Registro atualizado com sucesso!");</script>';
        echo '<script>
                setTimeout(function(){
                    window.location.href = "index.php";
                }, 1); // Redireciona após 1 segundo
              </script>';
    } else {
        echo "Erro ao redefinir a senha: " . $conn->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}