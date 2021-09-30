<?php

    require_once("../app/db/conexao.php");

    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

    $limite = 12;

    $inicio = ($limite * $pagina) - $limite;

    $sql = $conexao ->prepare("SELECT COUNT(*) AS num FROM loja.produtos");
    $resultprods = $sql->execute();
    $num = $sql->fetch(PDO::FETCH_ASSOC);

    $qtdpaginas = ceil($num['num']/$limite);


    $sql = 'SELECT * FROM loja.produtos limit :inicio, :limite';
    $stmt = $conexao->prepare($sql);
    $stmt -> bindValue(':inicio', $inicio, PDO::PARAM_INT);
    $stmt -> bindValue(':limite', $limite, PDO::PARAM_INT);
    $result = $stmt->execute();
    $produtos = $stmt->fetchAll();

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
                    <div class="logo"><a href="index.php">MyTeams</a></div>
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
                                <li><a href="#">Cs:Go</li></a>
                                <li><a href="#">Lol</li></a>
                                <li><a href="#">Dota</li></a>
                                <li><a href="#">Wow</li></a>
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

                <?php
                    foreach($produtos as $produto) {

                ?>
                    <div class="product-card">
                        <div class="produto-logo">
                            <img src="imagens/logo_fundo.png" alt="logo">
                            <i class='bx bx-shopping-bag'></i>
                        </div>
                        <div class="imagem-produto">
                            <img src="<?php echo "imagens/upload/".$produto['fotoproduto']; ?>">
                        </div>
                        <div class="produto-detalhes">
                            <span class="produto-nome"><?php echo $produto['nomeproduto']; ?></span>
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
                                <p class="preco-nun">R$ <?php echo $produto['preco']; ?></p>
                            </div>
                        </div>
                        <div class="btn-addcarrinho">
                            <div class="button-layey"></div>
                            <button>Comprar</button>
                        </div>
                    </div>
                    <?php

                    }
                    ?>
                </div>
                <div class="paginas">

                    <p>

                    <?php    
                    
                    if($pagina != 1){
                        echo "<a href=public/produtos.php?pagina=".($pagina-1).">
                              <i class='bx bx-left-arrow-alt' ></i>
                              </a>";
                    }
                    ?>
                   
                    <?php
                        for($i=1;$i<=$qtdpaginas;$i++){
                            echo "<a href='public/produtos.php?pagina=$i'>".$i."</a>";

                        }
                    ?>

                    <?php    

                    if($pagina != $qtdpaginas){
                        echo '<a href="public/produtos.php?pagina='.($pagina+1).'">
                        <i class="bx bx-right-arrow-alt"></i>
                              </a>';
                    }
                    ?>

                   </p>

                </div>
        </nav>
        
    </body>
</html>