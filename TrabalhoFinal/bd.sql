CREATE DATABASE crud character set uft8 collate uft8_general_ci;
USE crud;

CREATE TABLE usuarios(
    id NOT NULL(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (32) NOT NULL --Ningúem faz isso, NÃO USE MDS TB!!
)