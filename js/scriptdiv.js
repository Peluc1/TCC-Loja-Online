$('.btn').on('click', function() {
    $('.arquivo').trigger('click');
  });
  
  $('.arquivo').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('#file').val(fileName);
  });



var dadospessoais = document.getElementById("dadospessoais");
var compras = document.getElementById("compras");
var vendas = document.getElementById("vendas");
var anuncios = document.getElementById("anuncios");



window.onload = () => {
    
    compras.style.display = "none";

    vendas.style.display = "none";

    anuncios.style.display = "none";
}




var actiondados = document.getElementById("action-dados");

actiondados.addEventListener("click" , function(){

    dadospessoais.style.display = "flex";

    compras.style.display = "none";

    vendas.style.display = "none";

    anuncios.style.display = "none";

});



var actioncompras = document.getElementById("action-compras");

    actioncompras.addEventListener("click" , function(){

    dadospessoais.style.display = "none";

    compras.style.display = "flex";

    vendas.style.display = "none";

    anuncios.style.display = "none";

    
});



var actionvendas = document.getElementById("action-vendas");

    actionvendas.addEventListener("click" , function(){

    dadospessoais.style.display = "none";

    compras.style.display = "none";

    vendas.style.display = "flex";

    anuncios.style.display = "none";
    
});



var actionanuncios = document.getElementById("action-anuncios");

    actionanuncios.addEventListener("click" , function(){

    dadospessoais.style.display = "none";

    compras.style.display = "none";

    vendas.style.display = "none";

    anuncios.style.display = "flex";
        
    });
