<?php

require("../app/db/conexao.php");

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$senha = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

if (empty($email) || empty($senha)) {
    exit;
}

    $sql = 'SELECT * FROM loja.usuario WHERE email = :email';
    $stmt = $conexao->prepare($sql);
    $stmt ->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        $result = $stmt -> fetch(PDO::FETCH_ASSOC);

        if (password_verify($senha, $result['senha'])) {

            session_start();
            $id = $conexao->lastInsertId();
            $_SESSION['iduser'] = $id;

            header("location: ../public/perfil.php");
            exit;
        } else 
            echo 'merdão';

    }

    header("location: ../public/login.php?error=loginerror");
    exit;