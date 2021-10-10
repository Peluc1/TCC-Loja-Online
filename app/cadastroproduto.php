<?php

include("db/conexao.php");

session_start();

if(isset($_FILES['file']['name'])){

    /* Getting file name */
    $filename = $_FILES['file']['name'];
 
    /* Location */
    $location = "../public/imagens/upload/".$filename;
    $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
    $imageFileType = strtolower($imageFileType);
 
    /* Valid extensions */
    $valid_extensions = array("jpg","jpeg","png");
 
    $response = 0;
    /* Check file extension */
    if(in_array(strtolower($imageFileType), $valid_extensions)) {
       /* Upload file */
       if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
          $response = $location;
       }
    }
 
}

$nomeproduto = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipoproduto = $_POST['tipo'];
$pr = preg_replace("/[^\,0-9]/", "", $_POST['preco']);
$preco = str_replace(',', '.', $pr);
$dtpostado = date('Y-m-d H:i:s');
echo $preco;

   $sql = 'INSERT INTO loja.produtos(nomeproduto, descricao, tipoproduto, preco, dtpostado, fotoproduto,idfornecedor)
            VALUES(?,?,?,?,?,?,?)';
   $sql = $conexao->prepare($sql);
   $sql->bindParam(1, $nomeproduto);
   $sql->bindParam(2, $descricao);
   $sql->bindParam(3, $tipoproduto);
   $sql->bindParam(4, $preco);
   $sql->bindParam(5, $dtpostado);
   $sql->bindParam(6, $filename);
   $sql->bindParam(7, $_SESSION['iduser']);
   
   echo 'Produto postado com sucesso';
   $sql->execute() or die(print_r($sql->errorInfo(), true));