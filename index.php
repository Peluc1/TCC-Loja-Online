<?php 
    require("app/db/conexao.php");

    $page_title = 'MyTeams / Inicio';
    $links = ['<link rel="stylesheet" type="text/css" href="public/css/projeto.css">
                <link rel="stylesheet" type="text/css" href="public/css/slider-css.css">
                <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.css"/>
                <script type="text/javascript" src="public/js/JQuery3.3.1.js"></script>
                <script type="text/javascript" src="public/js/lightslider.js"></script>
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
                <div id="my-keen-slider" class="keen-slider">
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
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                    <div class="keen-slider__slide number-slide2 container-geral-destaques">
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
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                    <div class="keen-slider__slide number-slide3 container-geral-destaques">
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
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                    <div class="keen-slider__slide number-slide4 container-geral-destaques">
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
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                    <div class="keen-slider__slide number-slide5 container-geral-destaques">
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
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
                    <div class="keen-slider__slide number-slide6 container-geral-destaques">
                        <div class="text-div-destaques">
                            <div class="img-destaque-produto">
                                <img src="public/imagens/upload/88addd36ff.jpg">
                            </div>
                            <div class="titulo-descricao-destaques">
                                <p class="titulo-destaques">Glock-18 (Lembrança) | Farol Alto FALLEN FN - Nova de Fábrica 0,0068</p>
                                <p class="destaque-descricao">Glock-18 (Lembrança) | Farol Alto FALLEN FN - Nova de Fábrica 0,0068</p>
                            </div>
                        </div>
                        <div class="preco-destaques">
                            <p>R$ 138.00</p>
                            <i class='bx bx-cart'></i>
                        </div>
                    </div>
            </div>
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