<?php

require("../app/db/conexao.php");

if(isset($_POST["nomeproduto"])){
    $busca = $_POST["nomeproduto"];
    $query = "select * from loja.produtos where nomeproduto like '%".$busca."%' order by nomeproduto";
}else{
    $query = "select * from loja.produtos order by nomeproduto";
}
$stmt = $conexao->prepare($query);
$stmt ->execute();
$result = $stmt->fetchAll();
$rowCount = $stmt->rowCount();
$data = '';

if($rowCount > 0){
    foreach($result as $produto){
        
        $data .= "
            <a class='product-card' href='produto.php?product_id= ".$produto['idproduto']. "' >
            <div class='produto-logo'>
                <img src='../public/imagens/logo_fundo.png' alt='logo'>
                <i class='bx bx-shopping-bag'></i>
            </div>
            <div class='imagem-produto'>
                <img src='../public/imagens/upload/". $produto['fotoproduto']. "'>
            </div>
            <div class='produto-detalhes'>
                <span class='produto-nome'> ".$produto['nomeproduto'] ." </span>
                <div class='estrelas'>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
            </div>
            <div class='preco-div'>
                <div class='preco'>
                    <p class='preco-nun'>R$ ". $produto['preco']. "</p>
                </div>
            </div>
            <div class='btn-addcarrinho'>
                <div class='button-layey'></div>
                <button>Comprar</button>
            </div>
        </a>";
    }
}
else{
    $data="Nenhum registro encontrado";
}
echo $data;
