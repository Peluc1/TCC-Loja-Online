<?php
    require_once("../app/db/conexao.php");

    $sql_produto = 'SELECT * FROM loja.produtos WHERE idproduto = :id';

    $stmt = $conexao->prepare($sql_produto);
    $stmt->bindValue(':id', $_GET['product_id'], PDO::PARAM_INT);
    $stmt->execute();
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql_fornecedor = 'SELECT * FROM loja.usuario WHERE iduser = :id';

    $stmt = $conexao->prepare($sql_fornecedor);
    $stmt->bindValue(':id', $produto['idfornecedor'], PDO::PARAM_INT);
    $stmt->execute();
    $fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <li><a href="produtos.php" class="home2">Produtos</a></li>
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
        <nav class="submenu" id="submenu" style="margin-bottom: 100px;">
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
        <div class="produto-container">
            <div class="info-produtos-container"> 
                <div class="img-produtro-container">
                    <img src="<?php echo "imagens/upload/".$produto['fotoproduto']; ?>" width=400 height=400>
                </div>
                <div class="text-produtos-container">
                    <div class="text-produtos-subcontainer text-produtos-subcontainer-title">
                        <?php echo $produto['nomeproduto'];?>
                        <hr>
                    </div>
                    <div class="text-produtos-subcontainer">
                        <?php echo $produto['descricao'];?>
                    </div>
                    <div class="text-produtos-subcontainer text-produtos-subcontainer-preco">
                        <?php echo 'R$'.$produto['preco'];?>
                    </div>
                    <div class="text-produtos-subcontainer">
                        <div class="btn-comprar-subcontainer">
                            <div class="btn-comprar"></div>
                            <button>Comprar</button>
                        </div>
                    </div>
                    <div class="text-produtos-subcontainer">
                        <i class='bx bxs-user' style="font-size:35px;"><span style="font-size:30px;">Vendedor</span></i>
                    </div> 
                    <div class="text-produtos-subcontainer">
                        <?php echo "Nome:". " ". $fornecedor['nome']." ". $fornecedor['sobrenome'];?>
                    </div>
                    <div class="text-produtos-subcontainer" style="width: 60%;">
                        <?php echo "Contato:". " ". $fornecedor['email'];?>
                    </div>
                </div>
            </div>
        </div>

        <div class="produtos-relacionados">
            <div class="produtos-relacionados-container">
                <div class="produtos-relacionados-card">
                    
                </div>
            </div>
        </div>
    </body>
</html>