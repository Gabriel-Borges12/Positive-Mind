function mostrarInformacao() {
    var conteudo = document.getElementById("conteudo");
    if (conteudo.style.display === "none") {
        conteudo.style.display = "block";
    } else {
        conteudo.style.display = "none";
    }
}