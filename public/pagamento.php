<?php
require('../app/db/conexao.php');

session_start();

if(!isset($_SESSION['iduser'])){
    header("location: login.php");
}

$page_title = 'MyTeams / Pagamento';

$links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>',
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>',
        '<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">',
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>',
        '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>'];

require('includes/header.php');

?>

<div class="container-pagamento">
    <div class="titulo-container-pagamento"><i class='bx bxs-shopping-bags'></i>Forma de pagamento</div>
    <div class="formas-pagamento-subcontainer">
        <div class="buttons-div-pagamento">
            <div class="button-div-pix" id="btnpagamentopix">Pix</div>
            <div class="button-div-boleto" id="btnpagamentoboleto">Boleto</div>
        </div>
        <div class="forma-pagamento-pix" id="divpix">
            <div class="titulo-pagamento-pix">Pix</div>
            <div class="descricao-forma-pagamento">
                <p>Esta é a forma mais vantajosa para quem deseja comprar à vista. Você pode efetuar o pagamento e ter seu pedido aprovado instantâneamente, além de agilizar a liberação para envio do pedido.</p>
                <p>O que você precisa saber antes de pagar por PIX:</p>
                <p>• Você precisa ter cadastrado uma chave PIX na sua instituição financeira favorita;</p>
                <p>• Com o celular você poderá escanear o QR-Code ou copiar o código de pagamento e este valor será debitado da sua conta</p>
            </div>
        </div>
        <div class="forma-pagamento-boleto" id="divboleto">
            <div class="titulo-pagamento-boleto">Boleto</div>
            <div class="descricao-forma-pagamento">
                <p>O boleto bancário nada mais é do que uma forma simples e ágil para realização 
                de pagamentos que têm importantes funcionalidades de cobrança e controle de recebimentos por parte de quem vende.</p>
                <p>Você poderá efetuar o pagamento do boleto em qualquer Banco ou Casa Lotérica em qualquer lugar do Brasil, sem necessidade de confirmação do pagamento.</p>
            </div>
        </div>
    </div>
    <div class="preco-total-pagamento" id="preco-total-pagamento"></div>
</div>
<div class="button-pagamento-voltar">
    <a href="carrinho.php"><div class="button-voltar">Voltar</div></a>
    <form method="POST" action="finalizar.php">
        <input type="hidden" name="tipo_pagamento" value="pix" id="formapagamento">
        <a href="finalizar.php"><input type="submit" class="button-pagamento-pix" id="button-pagamento-pix" value="Pagar com o pix"></a>
    </form>
</div>

<script>
    var totalpreco = 0;
    var t,p,tx
    let produtopagamento = JSON.parse(localStorage.getItem('produto'))
    
    produtopagamento.forEach(function (item, indice, array) {
        totalpreco=parseFloat(totalpreco)+parseFloat(item.valor);
     })
        t = document.createElement("p")
        tx = document.createTextNode('Valor total: '+' R$' + totalpreco);
        t.appendChild(tx);
        document.getElementById('preco-total-pagamento').appendChild(t);
</script>
<script type="text/javascript" src="<?=URLROOT?>/public/js/scriptdivpagamento.js"></script>