<?php

include("conexao.php");

$nomeproduto = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$tipoproduto = $_POST['tipoproduto'];
$preco = md5($_POST['preco']);
$dtpostado = $_POST['dtpostado'];
$fotoproduto = $_POST['fotoproduto'];


$sql = $conexao->prepare("INSERT INTO loja.produtos(nomeproduto, descricao, tipoproduto, preco, dtpostado, fotoproduto VALUES(?,?,?,?,?,?)");
$sql->bindParam(1, $nomeproduto);
$sql->bindParam(2, $descricao);
$sql->bindParam(3, $tipoproduto);
$sql->bindParam(4, $preco);
$sql->bindParam(5, $dtpostado);
$sql->bindParam(6, $fotoproduto);

$sql->execute();
header('Location: produtos.php');



?>