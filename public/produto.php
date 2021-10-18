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

    $page_title = 'MyTeams | '.$produto['nomeproduto'];

    $links = ['<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>'];

    require('includes/header.php');

?>
    <div class="produtos-container-geral">
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
                        <div class="btn-comprar-subcontainer">
                            <div class="btn-comprar"></div>
                            <button id="add-carrinho">Adicionar ao carrinho</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fornecedor-info">
        <p>Informações do anunciante</p>
        <div class="fornecedor-text">
            <?php echo 'Nome: ' . $fornecedor['nome'] . ' ' . $fornecedor['sobrenome']?>
        </div>
        <div class="fornecedor-text">
            <?php echo 'Email de contato: ' . $fornecedor['email']?>
        </div>
    </div>
    <script>
        let id = "<?php echo $_GET['product_id']; ?>"
        let nomeproduto = "<?php echo $produto['nomeproduto'];?>"
        let valor = "<?php echo $produto['preco'];?>"
        let imagem = "<img src='imagens/upload/<?php echo $produto['fotoproduto'];?>'>"

        var addcarrinho = document.getElementById('add-carrinho')

        addcarrinho.addEventListener("click", function(){
            let produto = [];
            if(localStorage.getItem('produto')){
                produto = JSON.parse(localStorage.getItem('produto'));

                produto.forEach((item)=> {
                    console.log('nao ta vazio')
                })
            }
                produto.push({'produtoId' :id, 'nomeproduto' : nomeproduto, 'valor': valor, 'imagem': imagem});
                localStorage.setItem('produto', JSON.stringify(produto));
                })
    </script>
<?php
    require('includes/footer.php');
?>