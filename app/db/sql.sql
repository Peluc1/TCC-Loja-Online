/*

Script SQL TCC - '10.4.21-MySQL'

CREATE DATABASE loja;

09/10/2021

*/

DROP TABLE IF EXISTS loja.pedidos_produtos, loja.pedidos, loja.enderecos, loja.produtos , loja.usuario;

CREATE TABLE loja.usuario(
    iduser SERIAL PRIMARY KEY,
    nome VARCHAR(128) NOT NULL,
    sobrenome VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL UNIQUE,
    senha VARCHAR(128) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    dtnascimento DATE NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    sexo VARCHAR(64) NOT NULL,
    is_google TINYINT DEFAULT FALSE,
    is_admin TINYINT DEFAULT FALSE
);

CREATE TABLE loja.enderecos(
    id_endereco SERIAL PRIMARY KEY,
    endereco_contato VARCHAR(256),
    cep VARCHAR(32),
    estado VARCHAR(64),
    cidade VARCHAR(128),
    bairro VARCHAR(128),
    rua VARCHAR(256),
    numero VARCHAR(16),
    complemento TEXT,
    fk_user BIGINT UNSIGNED,
    FOREIGN KEY (fk_user) REFERENCES usuario (iduser)
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


CREATE TABLE loja.pedidos (
    id_pedido SERIAL PRIMARY KEY,
    tipo_pagamento VARCHAR(128),
    nota_fiscal TEXT,
    data_pedido DATE DEFAULT (CURRENT_DATE),
    fk_user BIGINT UNSIGNED,
    FOREIGN KEY(fk_user) REFERENCES usuario (iduser),
    fk_endereco BIGINT UNSIGNED,
    FOREIGN KEY(fk_endereco) REFERENCES enderecos (id_endereco)
);

CREATE TABLE loja.pedidos_produtos (
    id_pedido_produto SERIAL PRIMARY KEY,
    quantidade INT CHECK(quantidade > 0),
    preco NUMERIC(10,2) NOT NULL,
    fk_pedido BIGINT UNSIGNED,
    FOREIGN KEY (fk_pedido) REFERENCES pedidos (id_pedido),
    id_produto BIGINT UNSIGNED,
    FOREIGN KEY (id_produto) REFERENCES pedidos (id_pedido)
);

/*
CREATE TABLE ticket (

);

*/