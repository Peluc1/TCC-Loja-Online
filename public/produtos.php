<?php

    require_once("../app/db/conexao.php");

    $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

    $limite = 12;

    $inicio = ($limite * $pagina) - $limite;

    if(isset($_GET['tipo'])){
        $sql = $conexao ->prepare("SELECT COUNT(*) AS num FROM loja.produtos WHERE tipoproduto = :tipo");
        $sql -> bindValue(':tipo', $_GET['tipo']);
        $resultprods = $sql->execute();
        $num = $sql->fetch(PDO::FETCH_ASSOC);
        $qtdpaginas = ceil($num['num']/$limite);

        $sql = 'SELECT * FROM loja.produtos WHERE tipoproduto = :tipo limit :inicio, :limite';
        $stmt = $conexao->prepare($sql);
        $stmt -> bindValue(':tipo', $_GET['tipo']);
        $stmt -> bindValue(':inicio', $inicio, PDO::PARAM_INT);
        $stmt -> bindValue(':limite', $limite, PDO::PARAM_INT);
        $result = $stmt->execute();
        $produtos = $stmt->fetchAll();

    }else{
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
    }
    $page_title = 'MyTeams / Produtos';

    $links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>'];

    require('includes/header.php');

?>
            <div class="produtos" id="resultado">
                <?php
                    if($num['num'] != 0){
                    foreach($produtos as $produto) {
                ?>
                    <a class= "product-card" href="produto.php?product_id=<?php echo $produto['idproduto'];?>">
                            <div class="produto-logo">
                                <img src="imagens/icons/logo_fundo.png" alt="logo">
                                <i class='bx bx-shopping-bag'></i>
                            </div>
                            <div class="imagem-produto">
                                <img src="imagens/upload/<?=$produto['fotoproduto'] ?>">
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
                    </a>
                    <?php

                        }
                    }else{
                        echo '<div style="color:white; font-size:20px; font-weight:600;">Nenhum produto encontrado</div>';
                    }
                    ?>
            </div>
            <div class="paginas">
                <p>
                <?php    
                
                    if($pagina != 1){
                        echo "<a href=produtos.php?pagina=".($pagina-1).">
                            <i class='bx bx-left-arrow-alt' ></i>
                            </a>";
                    }
                    ?>
                
                    <?php
                        for($i=1;$i<=$qtdpaginas;$i++){
                            echo "<a href='produtos.php?pagina=$i'>".$i."</a>";

                        }
                    ?>

                    <?php    

                    if($pagina != $qtdpaginas){
                        echo '<a href="produtos.php?pagina='.($pagina+1).'">
                        <i class="bx bx-right-arrow-alt"></i>
                        </a>';
                    }
                ?>
                </p>
            </div>
<script src="js/pesquisar-produtos.js" type="text/javascript"></script>   
<?php
    require('includes/footer.php');
?>