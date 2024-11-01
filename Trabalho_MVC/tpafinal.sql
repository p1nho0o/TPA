create database tpafinal;
use tpafinal;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    codproduto VARCHAR(50) UNIQUE NOT NULL,
    qtdestoque INT NOT NULL,
    situacao ENUM('Com estoque', 'Sem estoque') NOT NULL,
    data_cadastro DATE NOT NULL
);

CREATE TABLE estoque (
    id_estoque INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT,
    quantidade INT NOT NULL,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);