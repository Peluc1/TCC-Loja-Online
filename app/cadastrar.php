<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

    include("../app/db/conexao.php");

    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
    $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
    $dtnascimento = filter_var($_POST['dtnascimento'], FILTER_SANITIZE_STRING);
    $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);
    $sexo = filter_var($_POST['genero'], FILTER_SANITIZE_STRING);
    $data = DateTime::createFromFormat('d/m/Y', $dtnascimento)->format('Y-m-d');

    if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) || empty($cpf) || empty($dtnascimento) || empty($telefone) || empty($sexo) ){
        exit;
    }

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO loja.usuario(nome, sobrenome, email, senha, cpf, dtnascimento, telefone, sexo) 
            VALUES(:nome, :sobrenome, :email, :senha, :cpf, :dtnascimento, :telefone, :sexo)';

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':sobrenome', $sobrenome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':cpf', $cpf);
    $stmt->bindValue(':dtnascimento', $data);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':sexo', $sexo);

    $stmt->execute();

    if ($stmt && $stmt->rowCount() > 0) {

        $id = $conexao -> lastInsertId();
        session_start();
        $_SESSION['iduser'] = $id;

        header('Location: ../public/perfil.php');
        exit;

    } else {
        header('Location: ../public/cadastro.php?error=registererror');
        exit;
    }

    