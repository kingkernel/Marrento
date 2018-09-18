create database kingkernel character set=utf8;
use kingkernel;

create table logs(
id bigint auto_increment,
acao text,
diaevento datetime,
info text,
primary key(id))engine=innodb charset=utf8;

create table url(
id bigint auto_increment,
url varchar(64),
primary key(id))engine=innodb charset=utf8;
