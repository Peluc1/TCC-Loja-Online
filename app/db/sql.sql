/*

Script SQL TCC

CREATE DATABASE loja;

*/

DROP TABLE IF EXISTS loja.usuario, loja.produtos;

CREATE TABLE loja.usuario(
    iduser SERIAL PRIMARY KEY,
    nome VARCHAR(128) NOT NULL,
    sobrenome VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL UNIQUE,
    senha VARCHAR(128) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    dtnascimento DATE NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    sexo VARCHAR(64) NOT NULL
);

CREATE TABLE loja.produtos(
    idproduto SERIAL PRIMARY KEY,
    nomeproduto VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL, 
    tipoproduto VARCHAR(30) NOT NULL,
    preco NUMERIC(10,2) NOT NULL,
    dtpostado DATE NOT NULL,
    fotoproduto VARCHAR(200) NOT NULL,

    idfornecedor BIGINT UNSIGNED DEFAULT NULL,
    FOREIGN KEY (idfornecedor) REFERENCES usuario (iduser)
);

/*
CREATE TABLE tipo_pagamento (

);

CREATE TABLE ticket (

);

*/