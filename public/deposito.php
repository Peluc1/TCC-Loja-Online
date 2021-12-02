<?php

require('../app/db/conexao.php');

$page_title = 'MyTeams / Depósito';

$links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
            <link rel="stylesheet" type="text/css" href="public/css/lightslider.css">
            <script type="text/javascript" src="public/js/JQuery3.3.1.js"></script>
            <script type="text/javascript" src="public/js/lightslider.js"></script>
            <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
            <script type="text/javascript" src="public/js/productslide.js"></script>'];

require('includes/header.php');

?>

<div class="container-gera-deposito">
    <div class="container-metodos-de-deposito">
        <span class="titulo-deposito">Métodos de Depósito</span>
        <div class="cartao-credito-deposito">
            <img src="imagens/icons/png-transparent-visa-debit-card-credit-card-logo-mastercard-visa-text-trademark-logo (1).png" alt="">
            <img src="imagens/icons/png-transparent-logo-mastercard-pentagram-flat-design-brand-mastercard-text-trademark-orange.png" alt="">
            <img src="imagens/icons/logo-cartao-elo-preto-512.png" alt="">
            <img src="imagens/icons/American-Express-Emblema.png" alt="">
        </div>
        <div class="skinpay-deposito">
            <p>SkinPay</p>
        </div>
        <div class="boleto-deposito">
            <img src="imagens/icons/png-transparent-visa-debit-card-credit-card-logo-mastercard-visa-text-trademark-logo (1).png" alt="">
            <img src="imagens/icons/png-transparent-logo-mastercard-pentagram-flat-design-brand-mastercard-text-trademark-orange.png" alt="">
            <img src="imagens/icons/logo-cartao-elo-preto-512.png" alt="">
            <img src="imagens/icons/American-Express-Emblema.png" alt=""></div>
        <div class="giftcard-deposito">
            <img src="imagens/icons/png-transparent-gift-card-logo-voucher-credit-card-gift-card-miscellaneous-text-rectangle.png" alt="">
        </div>
    </div>
    <div class="container-info-valo-metodo">
        <div class="cartao-credito-valor-deposito"></div>
        <div class="skinpay-valor-deposito"></div>
        <div class="boleto-valor-deposito"></div>
        <div class="giftcard-valor-deposito"></div>
    </div>
</div>
