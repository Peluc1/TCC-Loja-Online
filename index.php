<?php 
    require("app/db/conexao.php");

    $page_title = 'MyTeams / Inicio';
    $links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
                <link rel="stylesheet" type="text/css" href="public/css/slider-css.css">
                <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.css"/>'];

    require('public/includes/header.php');

    $sql = 'SELECT * FROM loja.produtos WHERE preco <= 150 LIMIT 6';
    $query = $conexao->prepare($sql);
    $query->execute();
    $produtos = $query->fetchAll();




?>

        <nav class="bemvindo">
            <img src="public/imagens/icons/logo_fundo.png" height="300" width="300">
            <div class="text">MYTEAMS</div>
            <div class="text2">Encontre o que precisar para seu lazer digital</div>
        </nav>
        <!-- DESTAQUES -->
            <nav class="destaquesprincipal">
                <h1 class="destaquestitulo">Destaques</h1>
                <div id="my-keen-slider" class="keen-slider">
                <?php 
                    foreach($produtos as $prod) {
                ?>     
                    <div class="keen-slider__slide number-slide1 container-geral-destaques">
                        <div class="text-div-destaques">
                            <div class="img-destaque-produto">
                                <img src="public/imagens/upload/88addd36ff.jpg">
                            </div>
                            <div class="titulo-descricao-destaques">
                                <p class="titulo-destaques">AK-47 | Piloto Neon FT</p>
                                <p class="destaque-descricao">Float: 0,3405 Testada em Campo</p>
                            </div>
                        </div>
                        <div class="preco-destaques">
                            <p>R$ 138.00</p>
                            <a id="add-carrinho" style="cursor:pointer"><i class='bx bx-cart'></i></a>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </nav>
        <!-- Fim DESTAQUES -->
        <nav class="catalogoprincipal">
            <hr style="width: 90%">
            <p class="textcatalogotitulo noselect">NOSSO CATÁLOGO</p>
            <p class="textcatalogotitulo2 noselect">Comece suas compras online</p>
            <div class="catalogo1">
                <div class="img-catalogo1"><img src="public/imagens/icons/1616769336_skrinshot-26-03-2021-19_33_33.png"></div>
                <div class="titulo-text-catalogo1">
                    <p class="titulo-catalogo1">Skins</p>
                    <p class="text-catalogo1">Com qualquer uma de nossas skins você vai ser motivo de inveja entre todos os seus amigos. Oferecemos uma vasta seleção de skins de diversos jogos online.</p>
                </div>
                <div class="credito-img-catalogo1"><p>Creditos à DSH :)</p></div>
            </div>
            <div class="catalogo2">
                <div class="titulo-text-catalogo2">
                    <p class="titulo-catalogo2">Contas</p>
                    <p class="text-catalogo2">Com qualquer uma de nossas contas você vai ser motivo de inveja entre todos os seus amigos. Oferecemos uma vasta seleção de contas de jogo, como o League of Legends.</p>
                </div>
                <div class="img-catalogo2"><img src="public/imagens/icons/PBECICLOp1_Easy-Resize.com_.jpg"></div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.js"></script>
        <script>
            var slider = new KeenSlider("#my-keen-slider", {
                slidesPerView: 3,
                spacing: 15,
            }) 
        </script>
        <?php
            require('public/includes/footer.php');
        ?>