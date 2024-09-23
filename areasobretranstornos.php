<?php
session_start();
include 'conexao.php';

// Verifica se o usuário já está logado
if(isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"] == true){

} else {
    header("location: index.php");
}

$nome = $_SESSION['usuario_nome'];
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/transtornos.css">
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>Área sobre transtornos</title>
</head>

<body>
<header class="navbar">
        <div class="estrutura-logo">
        <a href="home.php">
            <img src="img/logopadrao.png" alt="Logo" class="logo">
            </a>
        </div>
        <span class="nav-usuario">Bem-vindo (a), <?php echo $nome ?></span>
        <div id="links">
            <a href="home.php" class="nav-home">Início</a>
            <a href="comunidade.php" class="nav-home">Quiz</a>
            <a href="./logout.php" class="nav-home">Sair</a>
        </div>
    </header>
    <h2 class="transtornos-sobre">Sobre os Transtornos Psicológicos</h2>

    <h3 id="funcao" class="informacao">O que é um transtorno mental?
    </h3>
    </div>
    </div>
    <div class="flex-conteudo">
                <div class="container-wrapper">
                    <div class="containerBloco">Existem diversos transtornos mentais, com apresentações diferentes.</div>
                    <div class="containerBloco">Eles geralmente são caracterizados por uma combinação de comportamento anormais</div>
                    <div class="containerBloco">Que também podem afetar as relações com outras pessoas.</div>
                </div>
              
            </div>

    <h3>
        <span class="first-part">Você acha que precisa de ajuda? </span>
        <a href="areapsicologos.php" class="second-part">Clique aqui para buscar ajuda.</a>
    </h3>


    <div id="botaao" >
    <h4>Qual transtorno você gostaria de conhecer mais:</h4>

    <script src="script.js"></script>

    <h4>Faça sua pesquisa:</h4>
<input type="text" id="searchInput" placeholder="Digite sua pesquisa...">
<button onclick="performSearch()">Pesquisar</button>
</div>

<div id="searchResults"></div>

    <!-- Adicione aqui o bloco de script fornecido -->
    <script>
        function performSearch() {
            const apiKey = 'AIzaSyAkFyrx2q2zvWSvgQkBd7DfU_HI1tWs96k';
            const customSearchId = '67c197f7239ad4393'; // Apenas o identificador, não a URL completa
            const query = document.getElementById('searchInput').value;

            const apiUrl = `https://www.googleapis.com/customsearch/v1?q=${query}&key=${apiKey}&cx=${customSearchId}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => displayResults(data.items))
                .catch(error => console.error('Erro na pesquisa:', error));
        }

        function displayResults(results) {
            const resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = '';

            results.forEach(result => {
                const resultElement = document.createElement('div');
                resultElement.innerHTML = `<a href="${result.link}" target="_blank">${result.title}</a><p>${result.snippet}</p>`;
                resultsContainer.appendChild(resultElement);
            });
        }
    </script>


<div class="custom-shape-divider-bottom-1683068753">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"></path>
    </svg>
</div>

<footer class="main_footer container">

    <div class="content">

        <div class="colfooter">

            <h4 class="titleFooter">Menu</h4>

            <ul>
                <p><a href="index.php" title="Página Inicial">Página Inicial</a></p>
                <p><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></p>
                <p><a href="comunidade.php" title="Comunidade">Comunidade</a></p>
                <p><a href="fale_conosco.php" title="Fale Conosco">Fale Conosco</a></p>
            </ul>

        </div>

        <div class="colfooter">

            <h4 class="titleFooter">Contato</h4>
            <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
            <p><i class="icon icon-phone"></i> 21 90000-0000</p>
            <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>

        </div>

        <div class="colfooter">

            <h4 class="titleFooter">Redes Sociais</h4>


            <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span><i class="icon icon-instagram"></i></span></a>
            <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span><i class="icon icon-twitter"></i></span></a>
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg"
                class="botao">Gmail<span><i class="icon icon-pinterest"></i></span></a>

        </div>

        <div class="clear"></div>

    </div>

    <div class="main_footer_copy">

        <p class="m-b-footer">Positive Mind - 2024, todos os direitos reservados.</p>
        <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="#" title="Healther">Healther</a></p>

    </div>
</footer>

</body>

</html>
