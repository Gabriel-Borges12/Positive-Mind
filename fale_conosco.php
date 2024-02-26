<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="css/fale_conosco1.css">
</head>
<body>

<header class="navbar">
        <div class="estrutura-logo">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            <span class="nome-empresa">POSITIVE MIND</span>
        </div>
        <span class="nav-usuario">Bem-vindo (a),
            <?php echo $_SESSION['usuario_nome']; ?>
        </span>

        <a href="comunidade.php" class="nav-home">Comunidade</a>
        <a href="logout.php" class="nav-home">Sair</a>
    </header>

    <h1>Fale Conosco</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conecta ao banco de dados
        $conexao = new mysqli("localhost", "root", "", "bd_positivemind");

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        // Obtém os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // Insere os dados no banco de dados
        $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Mensagem enviada com sucesso!",
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location.href = "fale_conosco.php";
                });
                </script>';
        } else {
            // Erro ao enviar a mensagem, exibe alerta usando SweetAlert
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Erro ao enviar a mensagem",
                        text: "' . $conexao->error . '",
                        showConfirmButton: true
                    });
                    </script>';
        }
        

        // Fecha a conexão
        $conexao->close();
    }
    ?>
<div class= "container">
    <form action="fale_conosco.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" rows="4" required></textarea>

        <input type="submit" value="Enviar">
    </form>
</div>



</body>
</html>
