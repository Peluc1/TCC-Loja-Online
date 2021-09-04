var actiondados = document.getElementById("action-dados");

actiondados.addEventListener("click" , function(){

    var dadospessoais = document.getElementById("dadospessoais");

    if(dadospessoais.style.display === "none"){
        dadospessoais.style.display = "flex"
    }
});
