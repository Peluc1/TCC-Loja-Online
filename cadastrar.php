<?php
session_start();
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cpf = $_POST['cpf'];
$dtnascimento = $_POST['dtnascimento'];
$telefone = $_POST['telefone'];


$sql = $conexao->prepare("INSERT INTO loja.usuario(nome, sobrenome, email, senha, cpf, dtnascimento, telefone) VALUES(?,?,?,?,?,?,?)");
$sql->bindParam(1, $nome);
$sql->bindParam(2, $sobrenome);
$sql->bindParam(3, $email);
$sql->bindParam(4, $senha);
$sql->bindParam(5, $cpf);
$sql->bindParam(6, $dtnascimento);
$sql->bindParam(7, $telefone);

$sql->execute();
header('Location: projeto.php');








/*
$nome =  mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$dtnascimento = mysqli_real_escape_string($conexao, trim($_POST['dtnascimento']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
*/

/*
$sql = "select count(*) as total from usuario when cpf = '$cpf'";
$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);

//if($row['total'] == 1){
    //$_SESSION['cpf ja cadastrado'] = true;
    //header('Location: cadastro.php' );
    //exit;
//}

$sql = "INSERT INTO loja.usuario (nome, sobrenome, senha, email, cpf, dtnascimento, telefone) values ('$nome', '$sobrenome', '$senha', '$email', '$cpf', '$dtnascimento', '$telefone')";
$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);

//if($row['total'] == 1){
   // $_SESSION['status_cadastrado'] = true;
//}
//echo $row['total'];
echo $result;
$conexao->close();
echo 'entrou';
//header('Location: cadastro.php');
*/
?>
