var divpix = document.getElementById("divpix")

var divboleto = document.getElementById("divboleto")

var carrinhomodal = document.getElementById('modal-carrinho')

var countproduto = document.getElementById('count-produto')

var modalcarrinhobtn = document.getElementById('btn-modal')

var btnpagamentopix = document.getElementById("btnpagamentopix")

var btnpagamentoboleto = document.getElementById("btnpagamentoboleto")

var buttonpagamentopix = document.getElementById("button-pagamento-pix")

var formapagamento = document.getElementById("formapagamento")



window.onload = () => {
    
    carrinhomodal.style.display = "none"

    countproduto.style.display = "none"

    modalcarrinhobtn.style.display = "none"

    divboleto.style.display = "none";

    btnpagamentopix.style.backgroundColor = "gray"

}


btnpagamentopix.addEventListener("click" , function(){

    divpix.style.display = "block"

    btnpagamentopix.style.backgroundColor = "gray"

    btnpagamentoboleto.style.backgroundColor = "transparent"

    divboleto.style.display = "none"

    buttonpagamentopix.style.display = "block"

    buttonpagamentopix.value = "Pagar com o pix"

    formapagamento.value = "pix"

});


btnpagamentoboleto.addEventListener("click" , function(){

    divpix.style.display = "none"

    btnpagamentopix.style.backgroundColor = "transparent"

    btnpagamentoboleto.style.backgroundColor = "gray"

    divboleto.style.display = "block"

    buttonpagamentopix.value = "Pagar com o boleto"

    formapagamento.value="boleto"

});


