<?php include("conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
        <title>MyTeams / Produtos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/projeto.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="menuprincipal">
                <div class="navbar" id="navbar">
                    <div class="logo"><a href="projeto.php">MyTeams</a></div>
                    <div class="nav-links pre-ender">
                    <ul class="links">
                        <li><a href="#" class="home2">Home</a></li>
                        <li><a href="#" class="home2">Sobre Nós</a></li>
                    </ul>
                    </div>

                    <div class="nav-links ender">

                        <ul class="links">
                            <li>
                                <i class='bx bx-user-circle'></i>
                                <ul class="perfilsubmenu submenuprincipal">
                                    <li><a href="#">Login</li></a>
                                    <li><a href="#">Perfil</li></a>
                                </ul>
                            </li>
                            <li>
                                <i class='bx bx-cart' ></i>
                            </li>
                        </ul>
                        <div class="search-box">
                            <i class='bx bx-search' ></i>
                            <div class="input-box pesquisar">
                                <input type="text" placeholder="O que procura?">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <nav class="submenu" id="submenu">
            <div class="navbar">
                <div class="nav-links">
                    <ul class="links">
                    <li>
                        <a href="#" class="home2">Assinaturas</a>
                        <i class='bx bx-up-arrow-alt arrow assinaturasarrow' ></i>
                        <ul class="perfilsubmenu submenuprincipal">
                            <li><a href="#">Netflix</li></a>
                            <li><a href="#">Disney+</li></a>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="home2">Skins e itens</a>
                        <i class='bx bx-up-arrow-alt arrow skinsitensarrow' ></i>
                        <ul class="perfilsubmenu submenuprincipal">
                            <li><a href="#">Netflix</li></a>
                            <li><a href="#">Disney+</li></a>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="home2">Contas</a>
                        <i class='bx bx-up-arrow-alt arrow contasarrow' ></i>
                        <ul class="perfilsubmenu submenuprincipal">
                            <li><a href="#">Netflix</li></a>
                            <li><a href="#">Disney+</li></a>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="home2">Jogos</a>
                        <i class='bx bx-up-arrow-alt arrow jogosarrow' ></i>
                        <ul class="perfilsubmenu submenuprincipal">
                            <li><a href="#">Netflix</li></a>
                            <li><a href="#">Disney+</li></a>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav>
                <div class="produtos">
                    <div class="product-card">
                        <div class="produto-logo">
                            <img src="logo/CSGO.png" alt="logo">
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        <div class="imagem-produto">
                            <img src="imagens/Ak-47 Piloto Neon FT.png">
                        </div>
                        <div class="produto-detalhes">
                            <span class="produto-nome">AK-47 Piloto Neon</span>
                            <div class="estrelas">
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                        </div>
                        <div class="preco-div">
                            <div class="preco">
                                <p class="preco-nun">R$ 147,00</p>
                            </div>
                        </div>
                        <div class="btn-addcarrinho">
                            <div class="button-layey"></div>
                            <button>Comprar</button>
                        </div>
                    </div>
                </div>
        </nav>
        <script src="js/paginacao.js"></script>
    </body>
</html>