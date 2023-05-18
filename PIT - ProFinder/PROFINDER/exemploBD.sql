create database nome_do_banco_de_dados;

use nome_do_banco_de_dados;

create table aluno (
    id int auto_increment primary key,
    nome varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null
);

insert into aluno (nome, senha, email) values
    ('aluno 01', 'senha01', 'aluno01@gmail.com'),
    ('aluno 02', 'senha02', 'aluno02@gmail.com'),
    ('aluno 03', 'senha03', 'aluno03@gmail.com');

-- recuperar os registros da tabela aluno
select * from aluno;

create table professor (
    id int auto_increment primary key,
    nome varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null
);

insert into professor (nome, senha, email) VALUES
    ('professor 01', 'senha01', 'professor01@gmail.com'),
    ('professor 02', 'senha02', 'professor02@gmail.com'),
    ('professor 03', 'senha03', 'professor03@gmail.com');

-- recuperar os registros da tabela professor
select * from professor;
