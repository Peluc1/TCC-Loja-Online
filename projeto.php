<?php include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MyTeams / Inicio</title>
        <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/x-icon" />
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/projeto.css">
    </head>
    <body>
        
        <header>
            <a href="produtos.html" class="logo">MyTeams</a>
            <nav class="nav_links">
                <li><a href="projeto.html">Início</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <div class="dropdown">
                    <li><a href="produtos.html">Produtos</a></li>
                     <div class="dropdown-content">
                         <a><ul>League Of Legends</ul></a>
                         <a><ul>CS:GO</ul></a>
                         <a><ul>World of Warcraft</ul></a>
                         <a><ul>Assinaturas</ul></a>
                     </div>  
                 </div>         
                <li><a href="login.php">Cadastro/Login</a></li>
            </nav>
        </header>

        <nav class="bemvindo">
            <div class="text">BEM-VINDO</div>
            <div class="text">AO</div>
            <div class="text">MYTEAMS</div>
            <div class="text2">Loja de produtos online</div>
        </nav>
        
        <nav class="destaquesprincipal">
           <fieldset class="destaquestitulo">
                <legend>Destaques</legend>
           </fieldset>
           <div class="destaques">
               <div class="orgdestaque">
                    <a href="#"><img src="imagens/netflix.png" class="produtodestaques"></a>
                    <a href="#"><p class="text3">Netflix Premium</p></a>
                    <a href="#"><p class="text3">R$ 40,00</p></a>
                </div>
                <div class="orgdestaque"> 
                    <a href="#"><img src="imagens/spotify.png" class="produtodestaques"></a>
                    <a href="#"><p class="text3">Spotify premium individual</p></a>
                    <a href="#"><p class="text3">R$ 18,00</p></a>
                </div>
                <div class="orgdestaque">
                    <a href="#"><img src="imagens/Ak-47 Piloto Neon FT.png" class="produtodestaques"></a>
                    <a href="#"><p class="text3">AK-47 Piloto Neon FT</p></a>
                    <a href="#"><p class="text3">R$ 161,00</p></a>
                </div>
                <div class="orgdestaque">
                    <a href="#"><img src="imagens/AWP Fogo Selvagem FT.png" class="produtodestaques"></a>
                    <a href="#"><p class="text3">AWP Fogo Selvagem FT</p></a>
                    <a href="#"><p class="text3">R$ 255,00</p></a>
                </div>
            </div>
        </nav>

        <nav class="catalogoprincipal">
            <div class="catalogotitulo">
                <p class="textcatalogotitulo">NOSSO CATÁLOGO</p>
                <p class="textcatalogotitulo2">Comece suas compras online</p>
            </div>
        </nav>

        <nav class="catalogo1">
            <img src="imagens/assinatura.jpg" class="imagecatalogo1">
            <div class="textcatalogo1">
                <li class="textcatalogo1titulo">Assinaturas</li>
                <li class="textcatalogo1corpo1">O MyTeams tem a mais ampla seleção de assinatura onlines. Não importa o que você está procurando, garantimos que encontrará o que precisa.</li>
            </div>
        </nav>
        <nav class="catalogo2">
            <div class="textcatalogo2">
                <li class="textcatalogo2titulo">Skins de jogos</li>
                <li class="textcatalogo2corpo1">Com qualquer uma de nossas skins você vai ser motivo de inveja entre todos os seus amigos. Oferecemos uma vasta seleção de skins de diversos jogos online.</li>
            </div>
            <img src="imagens/skinsdestaques.jpg" class="imagecatalogo2">
        </nav>

        <nav class="melhoresmarcas">
            <div>
                <p class="titulomarcas">Assinaturas de Streaming</p>
                <p class="subtitulomarcas">O que oferecemos.</p>
            </div>
            <div class="marcas">
                <div class="orgmarcas">
                    <img src="imagens/disney-plus.png" class="imagemarcas">
                    <p class="text3">Disney +</p>
                </div>
                <div class="orgmarcas">
                    <img src="imagens/netflix.png" class="imagemarcas">
                    <p class="text3">Netflix</p>
                </div>
                <div class="orgmarcas">
                    <img src="imagens/primevideo.png" class="imagemarcas">
                    <p class="text3">Prime Vídeo</p>
                </div>
                <div class="orgmarcas">
                    <img src="imagens/hbogo.png" class="imagemarcas">
                    <p class="text3">HBO GO</p>
                </div>
            </div>
        </nav>
        <footer>
           <div class="social">
             <a href="a" class="ftfooter"><img src="imagens/facebook.png" width="50" height="50"></a>
             <a href="a" class="ftfooter"><img src="imagens/instagram.png" width="50" height="52"></a>
             <a href="a" class="ftfooter"><img src="imagens/twitter.png" width="50" height="50"></a>
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
    </body>
</html>