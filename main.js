document.addEventListener("DOMContentLoaded", function() {
    var paragrafo = document.querySelector(".informacao");
    var conteudo = document.getElementById("conteudo");

    
    paragrafo.addEventListener("click", function() {
   
        if (conteudo.style.display === "none" || conteudo.style.display === "") {
         
            conteudo.style.display = "block";
        } else {
           
            conteudo.style.display = "block";
        }
    });
});
