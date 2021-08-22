<?php

include("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['password']);
try {
    $sql = $conexao->prepare("SELECT * FROM loja.usuario WHERE email = :email AND senha = :senha");
    $sql->execute(
        array (
            'email' => $email,
            'senha' => $senha
        )
        );
    $count = $sql->rowCount();
    if ($count > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("location:perfil.php");
    }
    else {
        echo "Erro ao logar!!";
        header("location:login.php");
    }
    
}
catch(PDOException $error) {
    $message = $error->getMessage();
}



?>