<?php
    // Certifique-se de ter um ID de post 1 na sua tabela "posts"
    $post_id = 1;
?>
 
<form action="index.php" method="post">
 
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
        <input type="submit" value="Adicionar Comentário" name="post_comment">
    </p>
</form>
