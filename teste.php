<?php
session_start();
include 'conexao.php';

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

$usuario_id = $_SESSION['usuario_id'];

// Recuperar nome do usuário
$sql = "SELECT usuario_nome FROM usuarios WHERE usuario_id = $usuario_id";
$result = $conn->query($sql);
$nome_usuario = ($result->num_rows > 0) ? $result->fetch_assoc()["usuario_nome"] : "Usuário desconhecido";

// Função para responder a um comentário
function responderComentario($conn, $comentario_id, $resposta) {
    // Inserir a resposta na tabela de respostas
    $sql = "INSERT INTO respostas_comentarios (comentario_id, resposta, data) VALUES ('$comentario_id', '$resposta', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Resposta enviada com sucesso!');</script>";
    } else {
        echo "Erro ao enviar a resposta: " . $conn->error;
    }
}

// Verificar se o formulário foi enviado para responder a um comentário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["responder_comentario"])) {
    $comentario_id = $_POST['comentario_id'];
    $resposta = $_POST['resposta'];
    responderComentario($conn, $comentario_id, $resposta);
}

// Verificar se o formulário foi enviado para adicionar um novo comentário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"])) {
    $comentario = $_POST["comment"];

    // Inserir o comentário na tabela de comentários
    $sql = "INSERT INTO comentarios (usuario_id, comentario, data) VALUES ('$usuario_id', '$comentario', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
        echo "<script>swal('Comentário enviado com sucesso!', '', 'success');</script>";
    } else {
        echo "Erro ao enviar o comentário: " . $conn->error;
    }
}

// Verificar se o formulário foi enviado para editar um comentário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_comment"])) {
    $comment_id = $_POST['comment_id'];
    $edited_comment = $_POST['edited_comment'];

    // Verificar se o comentário pertence ao usuário logado
    $sql_check_comment_owner = "SELECT * FROM comentarios WHERE id = $comment_id AND usuario_id = $usuario_id";
    $result_check_comment_owner = $conn->query($sql_check_comment_owner);
    if ($result_check_comment_owner->num_rows > 0) {
        $sql_update_comment = "UPDATE comentarios SET comentario = '$edited_comment' WHERE id = $comment_id";
        if ($conn->query($sql_update_comment) === TRUE) {
            echo "<script>alert('Comentário editado com sucesso!');</script>";
        } else {
            echo "Erro ao editar o comentário: " . $conn->error;
        }
    } else {
        echo "<script>alert('Você não tem permissão para editar este comentário.');</script>";
    }
}

// Verificar se o formulário foi enviado para excluir um comentário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_comment"])) {
    $comment_id = $_POST['comment_id'];

    // Verificar se o comentário pertence ao usuário logado
    $sql_check_comment_owner = "SELECT * FROM comentarios WHERE id = $comment_id AND usuario_id = $usuario_id";
    $result_check_comment_owner = $conn->query($sql_check_comment_owner);
    if ($result_check_comment_owner->num_rows > 0) {
        // Excluir as respostas associadas ao comentário
        $sql_delete_responses = "DELETE FROM respostas_comentarios WHERE comentario_id = $comment_id";
        if ($conn->query($sql_delete_responses) === TRUE) {
            // Em seguida, exclua o próprio comentário
            $sql_delete_comment = "DELETE FROM comentarios WHERE id = $comment_id";
            if ($conn->query($sql_delete_comment) === TRUE) {
                echo "<script>alert('Comentário excluído com sucesso!');</script>";
            } else {
                echo "Erro ao excluir o comentário: " . $conn->error;
            }
        } else {
            echo "Erro ao excluir as respostas: " . $conn->error;
        }
    } else {
        echo "<script>alert('Você não tem permissão para excluir este comentário.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aba de Comunidade</title>
    <link rel="stylesheet" href="./css/comunidade.css">
</head>
<body>
    <header class="navbar">
        <div class="estrutura-logo">
            <a href="home.php">
                <img src="img/logopadrao.png" alt="Logo" class="logo">
            </a>
        </div>
        <span class="nav-usuario">Bem-vindo, <?php echo $nome_usuario; ?></span>
        <div id="links">
            <a href="home.php" class="nav-home">Início</a>
            <a href="comunidade.php" class="nav-home">Comunidade</a>
            <a href="" class="nav-home">Sair</a>
        </div>
    </header>

    <div class="container">
        <h1>Bem-vindo, <?php echo $nome_usuario; ?>!</h1>

        <h2>Comentários:</h2>
        <?php
        // Exibir todos os comentários
        $sql = "SELECT c.id, c.comentario, c.data, u.usuario_nome, c.usuario_id FROM comentarios c JOIN usuarios u ON c.usuario_id = u.usuario_id ORDER BY c.data DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data_formatada = date("d/m/Y H:i:s", strtotime($row["data"]));
                
                echo "<div class='comment-box'>";
                echo "<p class='user'>" . $row["usuario_nome"] . "</p>";
                echo "<p>" . $row["comentario"] . "</p>";
                echo "<p>Data: " . $data_formatada . "</p>";
            
                if ($row["usuario_id"] == $usuario_id) {
                    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
                    echo "<input type='hidden' name='comment_id' value='" . $row["id"] . "'>";
                    echo "<input type='text' name='edited_comment' value='" . $row["comentario"] . "'>";
                    echo "<button type='submit' name='edit_comment'>Editar</button>";
                    echo "<button type='submit' name='delete_comment'>Excluir</button>";
                    echo "</form>";
                }
                // Formulário para responder ao comentário
                echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
                echo "<input type='hidden' name='comentario_id' value='" . $row["id"] . "'>";
                echo "<textarea name='resposta' placeholder='Responda aqui'></textarea>";
                echo "<button type='submit' name='responder_comentario'>Responder</button>";
                echo "</form>";
            
                
            
                // Exibir respostas a este comentário
                $comment_id = $row["id"];
                $sql_respostas = "SELECT * FROM respostas_comentarios WHERE comentario_id = $comment_id";
                $result_respostas = $conn->query($sql_respostas);
                if ($result_respostas->num_rows > 0) {
                    echo "<div class='respostas'>";
                    echo "<p><strong>Respostas:</strong></p>";
                    while ($row_resposta = $result_respostas->fetch_assoc()) {
                        echo "<p>" . $row_resposta['resposta'] . "</p>";
                    }
                    echo "</div>";
                }
            
                echo "</div>"; // Fechamento de .comment-box
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
