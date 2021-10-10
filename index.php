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
            <img src="public/imagens/logo_fundo.png" height="300" width="300">
            <div class="text">MYTEAMS</div>
            <div class="text2">Encontre o que precisar para seu lazer digital</div>
        </nav>

        <!-- DESTAQUES -->
        <nav class="destaquesprincipal">
           <h1 class="destaquestitulo">Destaques</h1>
            
            <div class="destaques">
                <ul id="autoWidth" class="cs-hidden">
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                    <li class="item-a">
                        <div class="box">
                            <p class="tituloproduto">Skin</p>
                            <img src="public/imagens/Ak-47 Piloto Neon FT.png"  class="model">
                            <div class="detalhes">
                                <p>Nome</p>
                                <hr>
                                <p>Preço</p>
                                <img src="public/imagens/plus.png" class="plus" width="30px" style="height: auto; max-width:100%; max-height:100%; padding: 5px;">
                            </div>
                        </div>
                    </li>
                </ul>    
            </div>      
        </nav>
        <!-- Fim DESTAQUES -->

        <nav class="catalogoprincipal">
            <hr style="width: 90%">
                <p class="textcatalogotitulo noselect">NOSSO CATÁLOGO</p>
                <p class="textcatalogotitulo2 noselect">Comece suas compras online</p>
            <nav class="catalogo1">
                <img src="public/imagens/assinatura.jpg" class="imagecatalogo1">
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
                <img src="public/imagens/skinsdestaques.jpg" class="imagecatalogo2">
            </nav>
        </nav>


        <nav class="melhoresmarcas">
            <div>
                <p class="titulomarcas">Assinaturas de Streaming</p>
                <p class="subtitulomarcas">O que oferecemos.</p>
            </div>
            <div class="marcas">
                <div class="orgmarcas">
                    <img src="public/imagens/disney-plus.png" class="imagemarcas">
                    <p class="text3">Disney +</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/netflix.png" class="imagemarcas">
                    <p class="text3">Netflix</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/primevideo.png" class="imagemarcas">
                    <p class="text3">Prime Vídeo</p>
                </div>
                <div class="orgmarcas">
                    <img src="public/imagens/hbogo.png" class="imagemarcas">
                    <p class="text3">HBO GO</p>
                </div>
            </div>
        </nav>
        <footer style="border-top:solid #004395 30px;">
           <div class="social">
             <a href="a" class="ftfooter"><img src="public/imagens/facebook.png" width="50" height="50"></a>
             <a href="a" class="ftfooter"><img src="public/imagens/instagram.png" width="50" height="52"></a>
             <a href="a" class="ftfooter"><img src="public/imagens/twitter.png" width="50" height="50"></a>
            </div>
            <div class="elementfooter">
                <a href="a" class="textfooter">Suporte</a>
                <a href="a" class="textfooter">Sobre</a>
                <a href="a" class="textfooter">Termos de uso</a>
                <a href="a" class="textfooter">Política de Privacidade</a>
            </div>
            <div class="creditos">
                <p class="textfooter">© Desenvolvido por Matheus, Pedro e Rafael</p>
            </div>
        </footer>
        <script src="public/js/scriptmenu.js"></script>
    </body>
</html>