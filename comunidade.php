<?php
    // Certifique-se de ter um ID de post 1 na sua tabela "posts"
    $post_id = 1;

    // Conectar ao banco de dados
    $conn = mysqli_connect("localhost", "root", "", "bd_positivemind");

    // Verificar a conexão
    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Query para buscar os comentários
    $sql = "SELECT * FROM comments WHERE post_id = $post_id";
    $result = mysqli_query($conn, $sql);

    // Verificar se há resultados
    if (mysqli_num_rows($result) > 0) {
        // Inicializar o array $comments
        $comments = array();
        
        // Loop para salvar os comentários em $comments
        while ($row = mysqli_fetch_object($result)) {
            $comments[] = $row;
        }
    } else {
        // Se não houver comentários, $comments será um array vazio
        $comments = array();
    }
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade</title>
    <link rel="stylesheet" href="../css/comunidade2.css">
</head>
<body>

<form action="salvarcom.php" method="post">
 
    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>
 
    <p>
        <label>Seu nome</label>
        <input type="text" name="usuario_nome" required>
    </p>
 
    <p>
        <label>Seu endereço de e-mail</label>
        <input type="email" name="usuario_email" required>
    </p>
 
    <p>
        <label>Comentário</label>
        <textarea name="comment" required></textarea>
    </p>
 
    <p>
        <input type="submit" value="Adicionar Comentário" name="post_comment">
    </p>
</form>

<ul class="comments">
    <?php foreach ($comments as $comment): ?>
        <li>
            <p>
                <?php echo $comment->name; ?>
            </p>

            <p>
                <?php echo $comment->comment; ?>
            </p>

            <p>
                <?php echo date("F d, Y h:i a", strtotime($comment->created_at)); ?>
            </p>

            <div data-id="<?php echo $comment->id; ?>" onclick="showReplyForm(this);">Responder</div>

            <form action="addres.php" method="post" id="form-<?php echo $comment->id; ?>" style="display: none;">

                <input type="hidden" name="reply_of" value="<?php echo $comment->id; ?>" required>
                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>

                <p>
                    <label>Seu nome</label>
                    <input type="text" name="name" required>
                </p>

                <p>
                    <label>Seu endereço de e-mail</label>
                    <input type="email" name="email" required>
                </p>

                <p>
                    <label>Comentário</label>
                    <textarea name="comment" required></textarea>
                </p>

                <p>
                    <input type="submit" value="Responder" name="do_reply">
                </p>
            </form>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>
