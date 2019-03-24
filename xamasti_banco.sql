create database xamasti character set=utf8;

use xamasti;
 -- usuarios
create table persons (
id int auto_increment,
nameperson varchar(50),
keyword varchar(65),
active boolean default 1,
primary key(id))engine=innodb charset=utf8;
-- ####################################################################
-- ####	Procedures referentes a persons	###############################
-- ####################################################################

-- #### ADD
delimiter //
	create procedure sp_add_persons (arg_nameperson varchar(50), arg_keyword varchar(65))
		begin
			insert into persons (nameperson, keyword) values (arg_nameperson, arg_keyword);
		end //
delimiter ;

call sp_add_persons("root", sha1(md5(sha1("123"))));

-- #### UP
delimiter //
	create procedure sp_up_persons(arg_id int, arg_nameperson varchar(50),
		arg_keyword varchar(65), arg_active boolean)
		begin
			update persons set nameperson=arg_nameperson, keyword=arg_keyword,
				active=arg_active where id=arg_id;
		end //
delimiter ;
-- procedure de login
delimiter //
	create procedure sp_login(arg_user varchar(50), arg_passwd varchar(65))
		begin
			select count(*) as existe from persons where nameperson=arg_user and keyword=arg_passwd and active=1;
		end//
delimiter ;
-- procedure autenticação
delimiter //
	create procedure sp_sel_user(arg_user varchar(50), arg_passwd varchar(65))
		begin
			select * from persons where nameperson=arg_user and keyword=arg_passwd and active=1;
		end//
delimiter ;


create table prob_category(
id int auto_increment,
prob varchar(50),
primary key(id))engine=innodb charset=utf8;

insert into prob_category (prob) values ("Outros"),("Impressora não imprime"), ("Atualizar o SGV"),
("Sem internet"), ("Computador Travando"), ("Computador lento"),
("Troca de Equipamento"), ("Headset mudo"), ("Mudar usuário de lugar");

delimiter //
	create procedure sp_sel_prob_category()
		begin
			select * from prob_category;
		end //
delimiter ;

create table teccalled (
id int auto_increment,
prob int,
estatus enum("Aberto", "Aguardando Atendimento", "Encerrado") default "Aberto",
openfor int,
opencalled datetime default now(),
description text(500),
primary key(id),
foreign key(prob) references prob_category(id),
foreign key(openfor) references persons(id))engine=innodb charset=utf8;

delimiter //
	create procedure sp_add_teccalled(arg_prob int, arg_estatus varchar(30),
		arg_openfor int, arg_opencalled datetime, description text(500))
		begin
			insert into teccalled (prob, estatus, openfor, opencalled, description)
				values (arg_prob, arg_estatus, arg_openfor, arg_opencalled, description);
		end //
delimiter ;



