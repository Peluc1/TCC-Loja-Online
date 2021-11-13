<?php

require('../app/db/env.php');

$page_title = 'About';

$links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
            <link rel="stylesheet" type="text/css" href="public/css/lightslider.css">
            <script type="text/javascript" src="public/js/JQuery3.3.1.js"></script>
            <script type="text/javascript" src="public/js/lightslider.js"></script>
            <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
            <script type="text/javascript" src="public/js/productslide.js"></script>'];

require('includes/header.php');

?>

<section class="about">
    <div class="imagem-about"><img src="imagens/icons/logo_fundo.png"></div>
    <div class="text-about">
        <p class="titulo-about">Sobre</p>
        <p>Este é um site de e-commerce criado como trabalho de conclusão de curso com o objetivo de ser um facilitador de transações entre jogadores que buscam comprar e vender contas, itens e skins.</p>
        <p>Aqui é possível que um anúncio seja criado pelo próprio usuário, que será mostrado nas páginas de navegações dos produtos.</p>
    </div>
</section>

<?php
require('includes/footer.php');
?>