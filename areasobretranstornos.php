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

   <div id="botaao" >
    <h4>Qual transtorno você gostaria de conhecer mais:</h4>
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

    <footer class="main_footer container">

<div class="content">

    <div class="colfooter">

        <h4 class="titleFooter"> Menu</h4>

        <ul>

            <li><a href="index.php" title="Página Inícial">Página Inícial</a></li>
            <li><a href="img/Termos.pdf" title="Termos de Uso" target="_blank">Termos de uso</a></li>
            <li><a href="comunidade.php" title="Comunidade">Comunidade</a></li>
            <li><a href="fale_conosco1" title="Fale Conosco">Fale Conosco</a></li>

        </ul>

    </div><!--Col Footer 1-->

    <div class="colfooter">

        <h4 class="titleFooter"> Contato</h4>
        <p><i class="icon icon-mail"></i> positivemindhealther@gmail.com</p>
        <p><i class="icon icon-phone"></i> 21 90000-0000</p>
        <p><i class="icon icon-whatsapp"></i> 21 90000-0000</p>

    </div><!--Col Footer 2-->

    <div class="colfooter">

        <h4 class="titleFooter"> Redes Sociais</h4>

        <a href="#" class="botao"><span> <i class="icon icon-facebook">Início</i> </span></a>
        <a href="https://www.instagram.com/positive_mindbrasil?igsh=dTF5NHRxbzQ2cTYw" class="botao">Insta<span>
                <i class="icon icon-instagram"></i> </span></a>
        <a href="https://x.com/positivemindbr?s=21&t=NCfJWWvec0F2TialOt2tfg" class="botao">X<span> <i
                    class="icon icon-twitter"></i> </span></a>
        <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=GTvVlcSBnNccbNzvDzPznhqqpQfljcjPnpfflhHtsrkjKKLKpmMDtWgvkVCpgTtFwNfkFHfxZCDGg"
            class="botao">Gmail<span> <i class="icon icon-pinterest"></i> </span></a>

    </div><!--Col Footer 3-->

    <div class="clear"></div>

</div><!--Contant-->

<div class="main_footer_copy">

    <p class="m-b-footer"> Positive Mind - 2024, todos os direitos reservados.</p>
    <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por <a href="#" title="Healther">Healther</a>
    </p>

</div>
</footer>
</body>

</html>
