<?php
session_start();
include 'conexao.php';

// Verificar se o usuário está logado
if(isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];

    // Recuperar nome do usuário
    $sql = "SELECT usuario_nome FROM usuarios WHERE usuario_id = $usuario_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir o nome do usuário
        $row = $result->fetch_assoc();
        $nome_usuario = $row["usuario_nome"];
    } else {
        $nome_usuario = "Usuário desconhecido";
    }
} else {
    // Redirecionar para a página de login se o usuário não estiver logado
    header("Location: login.php");
    exit;
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o comentário não está vazio
    if (!empty($_POST["comment"])) {
        // Preparar o comentário para ser inserido no banco de dados
        $comentario = $_POST["comment"];

        // Inserir o comentário na tabela de comentários
        $sql = "INSERT INTO comentarios (usuario_id, comentario, data) VALUES ('$usuario_id', '$comentario', NOW())";

        if ($conn->query($sql) === TRUE) {
            // Comentário inserido com sucesso
            echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
            echo "<script>swal('Comentário enviado com sucesso!', '', 'success');</script>";
        } else {
            echo "Erro ao enviar o comentário: " . $conn->error;
        }
    } else {
        echo "<p>O comentário não pode estar vazio.</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Aba de Comunidade</title>
    <link rel="stylesheet" href="./css/ccomunidade.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?php echo $nome_usuario; ?>!</h1>

        <h2>Comentários:</h2>
        <?php
        // Exibir todos os comentários
        $sql = "SELECT c.comentario, c.data, u.usuario_nome FROM comentarios c JOIN usuarios u ON c.usuario_id = u.usuario_id ORDER BY c.data DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Formatando a data para o formato brasileiro
                $data_formatada = date("d/m/Y H:i:s", strtotime($row["data"]));
                
                echo "<div class='comment-box'>";
                echo "<p class='user'>" . $row["usuario_nome"] . "</p>";
                echo "<p>" . $row["comentario"] . "</p>";
                echo "<p>Data: " . $data_formatada . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p class='error'>Ainda não há comentários.</p>";
        }
        ?>
        
        <div class="add-comment">
            <h2>Deixe seu comentário:</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <textarea name="comment" placeholder="Digite seu comentário aqui"></textarea>
                <input type="submit" value="Postar Comentário">
            </form>
        </div>
    </div>
    
</body>
</html>
