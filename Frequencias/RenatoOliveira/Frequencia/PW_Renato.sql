create database PW_Renato;
use PW_Renato;

create table produtos(
    idProduto int primary key not null auto_increment,
    nome varchar(64),
    descricao varchar(64),
    preco int);

INSERT INTO produtos(idProduto, nome, descricao, preco) VALUES ('','bola','bola de futebol','4');