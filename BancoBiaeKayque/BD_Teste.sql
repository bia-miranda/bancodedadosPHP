create database BD_Teste;

use BD_Teste;

create table TB_Teste
(
Codi_T int primary key auto_increment,
Nome_T varchar(40) not null,
Senha_T varchar(6) not null,
Sexo_T varchar(1) not null
);