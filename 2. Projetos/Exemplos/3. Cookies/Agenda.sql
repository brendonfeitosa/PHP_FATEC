create database Agenda;

create table Users(
id int not null,
username varchar(50) not null,
password varchar(255) not null,
created_at datetime  not null,
primary key (id)
);

create table contatos(
id int not null,
nome varchar(100),
email varchar(100),
datanasc date,
created_at datetime default current_timestamp(),
primary key (id)
);

create table compromissos(
id int not null,
descricao varchar(255),
data_inicio date,
created_at datetime default current_timestamp(),
primary key (id),
constraint fk_compromisso_contato


);