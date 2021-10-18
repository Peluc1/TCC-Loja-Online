var carrinhomodal = document.getElementById('modal-carrinho')

var countproduto = document.getElementById('count-produto')

var modalcarrinhobtn = document.getElementById('btn-modal')

var close = document.getElementsByClassName("close")[0]

modalcarrinhobtn.onclick = function() {
    carrinhomodal.style.display = "flex";

    countproduto.style.display = "none"
}

span.onclick = function() {
    carrinhomodal.style.display = "none";

    countproduto.style.display = "flex"
}

window.onload = () => {
    carrinhomodal.style.display="none";
}
