<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/psicologos.css">
    <title>Área sobre transtornos</title>

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
    </header>
    <h2>Sobre os Transtornos Psicológicos</h2>

    <h4>O que é um transtorno mental?</h4>

    <!-- Container Wrapper -->
    <div class="container-wrapper">
        <div class="container">Informações Aqui</div>
        <div class="container">Informações Aqui</div>
        <div class="container">Informações Aqui</div>
    </div>

    <h3>
        <span class="first-part">Você acha que precisa de ajuda? </span>
        <a href="pagina_de_ajuda.html" class="second-part">Clique aqui para buscar ajuda.</a>
    </h3>
</body>

</html>