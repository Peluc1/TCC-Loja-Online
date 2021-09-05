<?php

include("../conexao.php");
session_start();

if(isset($_FILES['file']['name'])){

    /* Getting file name */
    $filename = $_FILES['file']['name'];
 
    /* Location */
    $location = "../imagens/upload/".$filename;
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

$sql = $conexao->prepare("SELECT idusuario FROM loja.usuario where email = ?");
$sql->bindParam(1, $_SESSION['email']);

$result = $sql->execute();
$idusuario  = $sql->fetchColumn();

$nomeproduto = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipoproduto = $_POST['tipo'];
$preco = doubleval($_POST['preco']);
$dtpostado = "11/11/1111";
//$dtpostado = $_POST['dtpostado'];

  
   $sql = $conexao->prepare("INSERT INTO loja.produtos(nomeproduto, descricao, tipoproduto, preco, dtpostado, fotoproduto,idfornecedor) VALUES(?,?,?,?,?,?,?)");
   $sql->bindParam(1, $nomeproduto);
   $sql->bindParam(2, $descricao);
   $sql->bindParam(3, $tipoproduto);
   $sql->bindParam(4, $preco);
   $sql->bindParam(5, $dtpostado);
   $sql->bindParam(6, $filename);
   $sql->bindParam(7, $idusuario);
   
   echo $idusuario;
   $sql->execute() or die(print_r($sql->errorInfo(), true));;



?>