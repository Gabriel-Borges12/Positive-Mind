document.addEventListener("DOMContentLoaded", function() {
    var paragrafo = document.querySelector(".informacao");
    var conteudo = document.getElementById("conteudo");

    // Adiciona um evento de clique no parágrafo
    paragrafo.addEventListener("click", function() {
        // Verifica se o conteúdo está visível ou não
        if (conteudo.style.display === "none" || conteudo.style.display === "") {
            // Se estiver oculto, torna visível e esconde o parágrafo
            conteudo.style.display = "block";
            paragrafo.style.display = "none";
        } else {
            // Se estiver visível, oculta
            conteudo.style.display = "none";
            paragrafo.style.display = "block";
        }
    });
});