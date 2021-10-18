<?php 
    require("app/db/conexao.php");

    $page_title = 'MyTeams / Inicio';
    $links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
                <link rel="stylesheet" type="text/css" href="public/css/lightslider.css">
                <script type="text/javascript" src="public/js/JQuery3.3.1.js"></script>
                <script type="text/javascript" src="public/js/lightslider.js"></script>
                <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
                <script type="text/javascript" src="public/js/productslide.js"></script>'];

    require('public/includes/header.php');
?>

        <nav class="bemvindo">
            <img src="public/imagens/icons/logo_fundo.png" height="300" width="300">
            <div class="text">MYTEAMS</div>
            <div class="text2">Encontre o que precisar para seu lazer digital</div>
        </nav>

        <!-- DESTAQUES -->
        <nav class="destaquesprincipal">
           <h1 class="destaquestitulo">Destaques</h1>
        </nav>
        <!-- Fim DESTAQUES -->

        <nav class="catalogoprincipal">
            <hr style="width: 90%">
                <p class="textcatalogotitulo noselect">NOSSO CATÁLOGO</p>
                <p class="textcatalogotitulo2 noselect">Comece suas compras online</p>
            <nav class="catalogo1">
                <img src="public/imagens/icons/assinatura.jpg" class="imagecatalogo1">
                <div class="textcatalogo1">
                    <li class="textcatalogo1titulo noselect">Assinaturas</li>
                    <li class="textcatalogo1corpo1 noselect">O MyTeams tem a mais ampla seleção de assinatura onlines. Não importa o que você está procurando, garantimos que encontrará o que precisa.</li>
                </div>
            </nav>
            <nav class="catalogo2">
                <div class="textcatalogo2">
                    <li class="textcatalogo2titulo noselect">Skins de jogos</li>
                    <li class="textcatalogo2corpo1 noselect">Com qualquer uma de nossas skins você vai ser motivo de inveja entre todos os seus amigos. Oferecemos uma vasta seleção de skins de diversos jogos online.</li>
                </div>
                <img src="public/imagens/icons/skinsdestaques.jpg" class="imagecatalogo2">
            </nav>
        </nav>


        <nav class="melhoresmarcas">
            <div>
                <p class="titulomarcas">Assinaturas de Streaming</p>
                <p class="subtitulomarcas">O que oferecemos.</p>
            </div>
            <div class="marcas">
                <div class="orgmarcas">
                    <img src="public/imagens/icons/disney-plus.png" class="imagemarcas">
                    <p class="text3">Disney +</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/icons/netflix.png" class="imagemarcas">
                    <p class="text3">Netflix</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/icons/primevideo.png" class="imagemarcas">
                    <p class="text3">Prime Vídeo</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/icons/hbogo.png" class="imagemarcas">
                    <p class="text3">HBO GO</p>
                </div>
            </div>
        </nav>
        <?php
            require('public/includes/footer.php');
        ?>