-- #####################################################################
--		Data criação: 18/09/2018
--		Última alteração: 18/09/2018
-- #####################################################################
create database kingkernel character set=utf8;
use kingkernel;

create table log(
id bigint auto_increment,
acao text,
diaevento datetime,
info text,
primary key(id))engine=innodb charset=utf8;

create table url(
url varchar(64),
active boolean  default 0,
primary key(url),
)engine=innodb charset=utf8;

-- #####################################################################
--		adicionar log
-- #####################################################################
delimiter //
	create procedure sp_add_log(arg_acao text, arg_diaevento datetime, arg_info text)
		begin
			insert into log(acao, diaevento, info) values (arg_acao, arg_diaevento, arg_info);
		end //
delimiter ;

-- #####################################################################
--		adicionar url de busca
-- #####################################################################
delimiter //
	create procedure sp_add_url(arg_acao text, arg_diaevento datetime, arg_info text)
		begin
			insert into url(acao, diaevento, info) values (arg_acao, arg_diaevento, info);
		end //
delimiter ;
-- #####################################################################
--		update url de busca
-- #####################################################################
delimiter //
	create procedure sp_up_url(arg_oldurl varchar(64), arg_newurl varchar(64))
	begin
		update url set url=arg_newurl where url=arg_oldurl;
	end //
delimiter ;
-- #####################################################################
--		delete url de busca
-- #####################################################################
delimiter //
	create procedure sp_del_url(arg_durl varchar(64))
	begin
		update url set ativo=0 where url=arg_url;
	end //
delimiter ;

