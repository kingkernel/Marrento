create database xamasti character set=utf8;

use xamasti;

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

-- #### UP
delimiter //
	create procedure sp_up_persons(arg_id int, arg_nameperson varchar(50),
		arg_keyword varchar(65), arg_active boolean)
		begin
			update persons set nameperson=arg_nameperson, keyword=arg_keyword,
				active=arg_active where id=arg_id;
		end //
delimiter ;


create table prob_category(
prob varchar(50) primary key)engine=innodb charset=utf8;

insert into prob_category values ("Impressora não imprime"), ("Atualizar o SGV"),
("Sem internet"), ("Computador Travando"), ("Computador lento"),
("Troca de Equipamento"), ("Headset mudo"), ("outros");

create table teccalled (
id int auto_increment,
prob varchar(50),
estatus enum("Aberto", "Aguardando Atendimento", "Encerrado"),
openfor int,
opencalled datetime default now(),
primary key(id),
foreign key(prob) references prob_category(prob),
foreign key(openfor) references persons(id))engine=innodb charset=utf8;


