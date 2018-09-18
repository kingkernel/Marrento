create database kingkernel character set=utf8;
use kingkernel;

create table log(
id bigint auto_increment,
acao text,
diaevento datetime,
info text,
primary key(id))engine=innodb charset=utf8;

create table url(
id bigint auto_increment,
url varchar(64),
primary key(id))engine=innodb charset=utf8;

delimiter //
	create procedure sp_add_log(arg_acao text, arg_diaevento datetime, arg_info text)
		begin
			insert into log(acao, diaevento, info) values (arg_acao, arg_diaevento, arg_info);
		end //
delimiter ;
