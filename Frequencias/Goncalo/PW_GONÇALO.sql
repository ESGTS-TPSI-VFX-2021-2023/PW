create database PW_GONCALO;
use PW_GONCALO;

create table produtos (
idProduto int primary key not null auto_increment,
nome varchar(32),
descricao varchar(32),
preco int);
