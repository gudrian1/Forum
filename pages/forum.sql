Drop database if exists forum;
Create database forum;
Use forum;

Create table posts (
	id int(11) not null auto_increment,
  	contenu text,
  	posted datetime,
  	user_id int(11) not null,
  	primary key (id)
) ENGINE=InnoDB;

Insert into posts values
(3, "ceci est un test", "2021-01-20 00:00:00", 2),
(4, "Un autre article de test", "2021-01-06 16:44:00", 1);

Create table users (
	id int(11) not null,
  	login varchar(50),
  	password varchar(255),
  	email varchar(255),
  	lvl int(11) not null DEFAULT '1',
  	primary key (id)
) ENGINE=InnoDB;

Insert into users values
(1, "aragorn", "107d348bff437c999a9ff192adcb78cb03b8ddc6", "test@gmail.com", 1),
(2, "legolas", "107d348bff437c999a9ff192adcb78cb03b8ddc6", "legolas@gmail.com", 0);
