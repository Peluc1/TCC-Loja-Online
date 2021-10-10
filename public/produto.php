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
<?php

    require('includes/footer.php');

?>