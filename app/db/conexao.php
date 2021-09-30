<?php

    require_once 'env.php';

    try {

        $conexao = new PDO(INFO_DATABASE['dsn'], INFO_DATABASE['user'], INFO_DATABASE['password']);
        $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

        echo 'Error: '.$e->getCode().' Message: '.$e->getMessage();

    }